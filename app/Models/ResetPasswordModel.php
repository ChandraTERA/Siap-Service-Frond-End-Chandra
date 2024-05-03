<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResetPasswordModel extends Model
{
    use HasFactory;
    protected $table = 'password_reset_tokens';
    protected $fillable = ['email', 'token', 'status', 'otp_reset_password', 'otp_created_at'];
}
