<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        if (!isAdmin($this->role)) {
            $namaRole = 'Pengguna';
        } else {
            $namaRole = 'Admin';
        }

        return [
            'id' => $this->id,
            'id_customer' => $this->id_customer,
            'nama_role' => $namaRole,
            'role' => $this->role,
            'nama_lengkap' => $this->nama_lengkap,
            'email' => $this->email,
            'tgl_lahir' => date('j/n/Y', strtotime($this->tgl_lahir)),
            'no_tlp' => $this->no_tlp,
            'alamat' => $this->alamat,
            'password' => $this->password,
        ];
    }
}
