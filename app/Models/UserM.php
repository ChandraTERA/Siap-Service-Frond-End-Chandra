<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class UserM extends Authenticatable
{
    use HasFactory, HasUuids, SoftDeletes, HasApiTokens, Notifiable, CanResetPassword;
    protected $table = 'users';
    protected $fillable = [
        'id_customer',
        'nama_lengkap',
        'email',
        'no_tlp',
        'kota',
        'alamat',
        'password',
        'tgl_lahir',
        'fillpath_profil',
        'otp_verify',
        'is_verified',
        'role',
        'used_remember_token',
        'deleted_at',
        'remember_token',
        'created_at',
        'updated_at',
        'otp_created_at',

    ];

    public function getIncrements()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }

    protected $guard = 'user';
}
