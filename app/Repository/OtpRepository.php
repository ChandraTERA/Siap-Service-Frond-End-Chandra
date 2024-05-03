<?php

namespace App\Repository;

interface OtpRepository
{
    public function StoreNewUser($data);
    public function updateOTP($user);
}
