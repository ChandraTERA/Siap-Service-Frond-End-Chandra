<?php

namespace App\Models;

use App\Models\DaftarKerusakan;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Device extends Model
{
    use HasFactory, HasUuids, SoftDeletes, HasApiTokens, Notifiable;
    protected $guarded = ['id'];
    protected $table = 'devices';

    public function getIncrements()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }

    public function relationToDaftarKerusakan()
    {
        return $this->hasMany(DaftarKerusakan::class, 'device_id', 'id');
    }
}
