<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $role = 'Pengguna';
        if ($this->role == 1) {
            $role = 'Admin';
        }
        // parent::toArray($request)
        return [
            'id_customer' => $this->id_customer,
            'fillpath_profil' => $this->avatar,
            'nama_lengkap' => $this->full_name,
            'email' => $this->email,
            'alamat' => $this->address,
            'tanggal_lahir' => date("d/m/Y", strtotime($this->date_of_birth)),
            'role' => $role,
        ];
    }
}
