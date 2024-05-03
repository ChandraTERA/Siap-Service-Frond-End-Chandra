<?php

namespace App\Repository;


use App\Models\UserM;
use App\Repository\UserRepository;
use App\Http\Resources\CustomerResource;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Hash;

class UserImplement implements UserRepository
{

    public function storeUser($user, $newUser)
    {
        $user->update([
            'nama_lengkap' => $newUser['nama_lengkap'],
            'password' => $newUser['password'],
            'no_tlp' => $newUser['no_tlp'],
            'alamat' => $newUser['alamat'],
            'tgl_lahir' => $newUser['tgl_lahir'],
            'is_verified' => true,
        ]);

        return new UserResource($user);
    }

    public function emailUserSelect($email)
    {
        $user = UserM::where('email', $email)->first();
        return $user;
    }

    public function updateDataCustomer($oldData, $newData)
    {
        $newData['password'] = Hash::make($newData['password']);
        $oldData->update($newData);
        $oldData->save();
        return $oldData;
    }
}
