<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LaporanPenggunaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'tgl_registrasi_user' => date('j/n/Y', strtotime($this->created_at)),
            'id_customer' => $this->id_customer,
            'nama_lengkap' => $this->nama_lengkap,
            'kota' => $this->kota,
            'no_tlp' => $this->no_tlp,
            'tgl_lahir' => $this->tgl_lahir,

        ];
    }
}
