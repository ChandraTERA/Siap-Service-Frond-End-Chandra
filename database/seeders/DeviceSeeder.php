<?php

namespace Database\Seeders;

use App\Models\Device;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //MEMBUAT 3 JENIS DEVICE
        Device::create(['nama_device' => 'Handphone']);
        Device::create(['nama_device' => 'Komputer']);
        Device::create(['nama_device' => 'Laptop']);
    }
}
