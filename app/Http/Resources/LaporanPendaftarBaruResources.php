<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LaporanPendaftarBaruResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'tgl_registrasi' => date('j/n/Y', strtotime($this->created_at)),
            'user_id' => $this->user_id,
            'nama' => $this->nama,
            'alamat' => $this->alamat,
            'no_telepon' => $this->no_telepon,
            'tanggal_lahir' => $this->tanggal_lahir,
        ];
    }
}
