<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
{

    public function toArray(Request $request)
    {
        return [
            'id' => $this->id,
            'nama' => $this->nama,
            'jenis_barang' => $this->jenis_barang,
            'tanggal' => $this->tanggal,
            'status' => $this->status,
            'aksi' => $this->aksi,
        ];
    }
}
