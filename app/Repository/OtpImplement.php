<?php

namespace App\Repository;


use App\Models\UserM;
use Illuminate\Support\Carbon;
use App\Repository\OtpRepository;
use App\Repository\UserRepository;
use App\Http\Resources\UserResource;
use App\Http\Resources\CustomerResource;

class OtpImplement implements OtpRepository
{
    public function StoreNewUser($data)
    {
        $newUser = UserM::create([
            'nama_lengkap' => $data['nama_lengkap'],
            'tgl_lahir' => $data['tgl_lahir'],
            'no_tlp' => $data['no_tlp'],
            'kota' => $data['kota'],
            'alamat' => $data['alamat'],
            'password' => $data['password'],
            'otp_verify' => generateOTP(),
            'email' => $data['email'],
            'otp_created_at' => Carbon::now('Asia/Jakarta'),
            'id_customer' => generateIDCustomer(),
        ]);

        return $newUser;
    }

    public function updateOTP($user)
    {
        $user->update([
            'otp_verify' => generateOTP(),
            'otp_created_at' => Carbon::now('Asia/Jakarta'),
        ]);

        return $user;
    }
}
