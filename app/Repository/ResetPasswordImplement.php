<?php

namespace App\Repository;


use App\Models\UserM;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use App\Repository\UserRepository;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\UserResource;
use App\Models\ResetPasswordModel;
use Illuminate\Support\Facades\Hash;
use App\Repository\ResetPasswordRepository;

class ResetPasswordImplement implements ResetPasswordRepository
{
    public function store($data)
    {
        $tabelResetPw = ResetPasswordModel::create([
            'token' => $data['token'],
            'email' => $data['email'],
            'otp_reset_password' => generateOTP(),
            'otp_created_at' => Carbon::now('Asia/Jakarta'),
            'created_at' => Carbon::now()
        ]);
        return $tabelResetPw;
    }

    public function storeStatusResetPw($passModel)
    {
        $passModel->update([
            'status' => true,
        ]);

        return $passModel;
    }

    public function updateOTPResetPw($passModel)
    {
        $passModel->update([
            'otp_reset_password' => generateOTP(),
            'otp_created_at' => Carbon::now('Asia/Jakarta'),
        ]);

        return $passModel;
    }

    public function updatePassword($data, $user)
    {
        $user->update([
            'password' => Hash::make($data['password']),
        ]);
    }
}
