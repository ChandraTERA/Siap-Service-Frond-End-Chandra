<?php

namespace App\Http\Controllers\AUTH;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Repository\OtpRepository;
use Illuminate\Http\JsonResponse;
use App\Repository\UserRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\VerifyRequest;
use App\Jobs\DispatchSendEmailVerif;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    protected $otpRepository, $userRepository;
    public function __construct(
        OtpRepository $otpRepository,
        UserRepository $userRepository,
    ) {
        $this->otpRepository = $otpRepository;
        $this->userRepository = $userRepository;
    }

    // LOGIKA REGISTRASI CUSTOMER
    public function do_register(RegisterRequest $registerRequest)
    {
        try {
            $data = $registerRequest->all();
            $hashPassword = Hash::make($data['password']);
            $data['password'] = $hashPassword;

            Session::put('new_customer', $data);

            // STORE DATA PENDAFTAR
            $this->otpRepository->StoreNewUser($data);
            $user = $this->userRepository->emailUserSelect($data['email']);

            // KIRIM KODE OTP KE EMAIL
            dispatch(new DispatchSendEmailVerif([
                'email' => $user['email'],
                'otp_verify' => $user['otp_verify']
            ]));

            $mail = maskEmail($data['email']);
            return response()->json(['message' => "4 Digit code telah dikirimkan ke email $mail", 'otp' => $user['otp_verify'], 'id' => $user['id_customer']], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

    // LOGIKA VERIFIKASI EMAIL
    public function do_verifikasi_email(VerifyRequest $verifyRequest)
    {
        try {
            $sesi = Session::get('new_customer');
            if (!$sesi) {
                return response()->json(['message' => 'session pengguna tidak ditemukan'], JsonResponse::HTTP_UNAUTHORIZED);
            }
            $otpVerify = $verifyRequest['token1'] . $verifyRequest['token2'] . $verifyRequest['token3'] . $verifyRequest['token4'];
            $user = $this->userRepository->emailUserSelect($sesi['email']);

            if ($otpVerify == $user['otp_verify']) {
                $time = Carbon::parse($user['otp_created_at'], 'Asia/Jakarta');
                $currentTime = Carbon::now('Asia/Jakarta');
                $diffInSeconds = $currentTime->diffInSeconds($time);

                // KODE OTP AKAN TIDAK BERLAKU KETIKA LEBIH DARI 120 DETIK
                if ($diffInSeconds <= 120) {
                    $verifiedNewUser = $this->userRepository->storeUser($user, $sesi);
                    return response()->json(['message' => 'Email berhasil terverifikasi', 'status' => 'Register berhasil', 'data' => $verifiedNewUser], JsonResponse::HTTP_OK);
                } else {
                    return response()->json(['message' => 'Code sudah tidak berlaku']);
                }
            } else {
                return response()->json(['message' => 'Code OTP salah'], JsonResponse::HTTP_FORBIDDEN);
            }
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

    // LOGIKA RESEND OTP VERIFIKASI EMAIL
    public function resend_otp()
    {
        try {
            $sesi = Session::get('new_customer');
            if (!$sesi) {
                return response()->json(['message' => 'session pengguna tidak ditemukan'], JsonResponse::HTTP_UNAUTHORIZED);
            }
            $user = $this->userRepository->emailUserSelect($sesi['email']);

            if ($user['is_verified'] == true) {
                return response()->json(['message' => 'Email sudah terverifikasi']);
            } else {
                $this->otpRepository->updateOTP($user);
                dispatch(new DispatchSendEmailVerif([
                    'email' => $user['email'],
                    'otp_verify' => $user['otp_verify']
                ]));
                Session::put('new_customer', $sesi);

                $mail = maskEmail($sesi['email']);
                return response()->json(['message' => "4 digit kode baru telah dikirim ke email $mail", 'kode' => $user['otp_verify']], JsonResponse::HTTP_OK);
            }
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }
}
