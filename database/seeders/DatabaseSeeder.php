<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\DaftarKerusakan;
use App\Models\Device;
use App\Models\User;
use App\Models\UserM;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        //USER DENGAN EMAIL TERVERIFIKASI
        UserM::factory(15)->create();

        $this->call(UserSeeder::class);
        $this->call(DeviceSeeder::class);
        $this->call(DaftarKerusakanSeeder::class);
    }
}
