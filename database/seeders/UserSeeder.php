<?php

namespace Database\Seeders;

use App\Models\UserM;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //MEMBUAT USER ADMIN
        UserM::factory()->create([
            'nama_lengkap' => 'Admin',
            'id_customer' => generateIDCustomer(),
            'email' => 'admin@gmail.com',
            'tgl_lahir' => '2023-09-09',
            'no_tlp' => '08123456786',
            'alamat' => 'efwefsfsdsdfds',
            'kota' => 'Bantul',
            'is_verified' => true,
            'role' => 0,
            'otp_created_at' => now(),
            'password' => Hash::make('rahasia'),
        ]);

        //PENGGUNA USER TIDAK VERIFIKASI
        UserM::factory()->create([
            'nama_lengkap' => 'User',
            'id_customer' => generateIDCustomer(),
            'email' => 'user@gmail.com',
            'tgl_lahir' => '2023-09-09',
            'no_tlp' => '08123456786',
            'alamat' => 'efwefsfsdsdfds',
            'kota' => 'Bantul',
            'is_verified' => false,
            'role' => 1,
            'otp_created_at' => now(),
            'password' => Hash::make('rahasia'),
        ]);

        //USER DENGAN EMAIL TERVERIFIKASI
        UserM::factory(50)->create();
    }
}
