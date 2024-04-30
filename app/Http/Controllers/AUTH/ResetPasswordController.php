<?php

namespace App\Http\Controllers\AUTH;

use App\Models\UserM;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Repository\OtpRepository;
use Illuminate\Http\JsonResponse;
use App\Models\ResetPasswordModel;
use App\Repository\UserRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\ResetPwRequest;
use App\Service\UserInterfaceService;
use App\Http\Requests\ForgotPwRequest;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\OtpResetPwRequest;
use App\Service\OtpVerifInterfaceService;
use App\Repository\ResetPasswordRepository;
use App\Jobs\DispatchSendEmailResetPassword;
use App\Service\ResetPasswordInterfaceService;

class ResetPasswordController extends Controller
{
    protected $resetPasswordRepository, $userRepository;
    public function __construct(ResetPasswordRepository $resetPasswordRepository, UserRepository $userRepository)
    {
        $this->resetPasswordRepository = $resetPasswordRepository;
        $this->userRepository = $userRepository;
    }

    // LOGIKA SENDING EMAIL FORGOT PASSWORD
    public function forgot_password(ForgotPwRequest $forgotPwRequest)
    {
        try {
            $data = $forgotPwRequest->all();
            $user = $this->userRepository->emailUserSelect($data['email']);
            $data['token'] = Str::random(64);

            if ($user->is_verified == true) {
                $store = $this->resetPasswordRepository->store($data);
                Session::put('reset_password', $data);

                // KIRIM OTP KE EMAIL
                dispatch(new DispatchSendEmailResetPassword([
                    'email' => $user['email'],
                    'otp_reset_password' => $store['otp_reset_password']
                ]));

                $mail = maskEmail($forgotPwRequest['email']);
                return response()->json(['message' => "4 Digit code telah dikirimkan ke email $mail", 'otp_reset_password' => $store['otp_reset_password']], JsonResponse::HTTP_OK);
            } else {
                return response()->json(['message' => 'Email belum terverifikasi'], JsonResponse::HTTP_UNAUTHORIZED);
            }
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

    // LOGIKA INPUT OTP RESET PASSWORD
    public function otp_reset_password(OtpResetPwRequest $otpResetPwRequest)
    {
        try {
            $sesi = Session::get('reset_password');
            if (!$sesi) {
                return response()->json(['message' => 'session pengguna tidak ditemukan'], JsonResponse::HTTP_UNAUTHORIZED);
            }
            $otp_verify_password = $otpResetPwRequest['token1'] . $otpResetPwRequest['token2'] . $otpResetPwRequest['token3'] . $otpResetPwRequest['token4'];
            $passModel = ResetPasswordModel::where('token', $sesi['token'])->first();

            if ($otp_verify_password == $passModel['otp_reset_password']) {
                $time = Carbon::parse($passModel['otp_created_at'], 'Asia/Jakarta');
                $currentTime = Carbon::now('Asia/Jakarta');
                $diffInSeconds = $currentTime->diffInSeconds($time);

                if ($diffInSeconds <= 120) {
                    $this->resetPasswordRepository->storeStatusResetPw($passModel);

                    return response()->json(['status' => true]);
                } else {
                    return response()->json(['message' => 'Code tidak berlaku']);
                }
            } else {
                return response()->json(['message' => 'Code otp salah']);
            }
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

    // LOGIKA RESET PASSWORD
    public function reset_password(ResetPwRequest $resetPwRequest)
    {
        try {
            $data = $resetPwRequest->all();
            $sesi = Session::get('reset_password');
            $user = $this->userRepository->emailUserSelect($sesi['email']);

            if (!$user) {
                return response()->json(['message' => 'Pengguna dengan email ini tidak ditemukan'], JsonResponse::HTTP_FORBIDDEN);
            }
            $passModel = ResetPasswordModel::where('token', $sesi['token'])->first();

            if (!$passModel->status === true && !$passModel->token == $sesi['token']) {
                return response()->json(['success' => false]);
            } else {
                if ($passModel) {
                    $this->resetPasswordRepository->updatePassword($data, $user);
                    return response()->json(['message' => 'Password berhasil direset'], JsonResponse::HTTP_OK);
                }
            }
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }


    // LOGIKA RESEND OTP RESET PASSWORD
    public function resend_otp_password()
    {
        try {
            $sesi = Session::get('reset_password');
            if (!$sesi) {
                return response()->json(['message' => 'session pengguna tidak ditemukan'], JsonResponse::HTTP_UNAUTHORIZED);
            } else {
                $passModel = ResetPasswordModel::where('token', $sesi['token'])->first();

                if (!$passModel['status'] === false) {
                    return response()->json(['message' => 'send forgot password lagi!'], JsonResponse::HTTP_UNAUTHORIZED);
                } else {
                    $this->resetPasswordRepository->updateOTPResetPw($passModel);

                    dispatch(new DispatchSendEmailResetPassword([
                        'email' => $sesi['email'],
                        'otp_reset_password' => $passModel['otp_reset_password']
                    ]));

                    Session::put('reset_password', $sesi);

                    $mail = maskEmail($sesi['email']);
                    return response()->json(['message' => "4 digit code baru telah dikirim ke email $mail", 'kode' => $passModel['otp_reset_password']], JsonResponse::HTTP_OK);
                }
            }
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }
}
