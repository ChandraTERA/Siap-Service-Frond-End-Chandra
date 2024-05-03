<?php

namespace App\Repository;

interface ResetPasswordRepository
{
    public function store($data);
    public function storeStatusResetPw($passModel);
    public function updateOTPResetPw($passModel);
    public function updatePassword($data, $user);
}
