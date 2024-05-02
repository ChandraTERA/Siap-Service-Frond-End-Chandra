<?php

namespace App\Models;

use App\Models\Device;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DaftarKerusakan extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'daftar_kerusakans';
    protected $guarded = ['id'];

    public function getIncrements()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }

    public function relationToDevice()
    {
        return $this->belongsTo(Device::class, 'device_id', 'id');
    }
}
