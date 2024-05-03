<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'jenis_barang',
        'tanggal',
        'status',
        'aksi',
    ];
}
