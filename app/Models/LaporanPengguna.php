<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanPengguna extends Model
{
    use HasFactory;

    protected $table = 'laporan_pengguna';

    protected $fillable = [
        'user_id',
        'nama',
        'alamat',
        'no_telepon',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
