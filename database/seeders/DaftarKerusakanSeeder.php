<?php

namespace Database\Seeders;

use App\Models\DaftarKerusakan;
use App\Models\Device;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DaftarKerusakanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $handphone = Device::where('nama_device', 'Handphone')->first();
        $idHandphone = $handphone->id;

        $komputer = Device::where('nama_device', 'Komputer')->first();
        $idKomputer = $komputer->id;

        $laptop = Device::where('nama_device', 'Laptop')->first();
        $idLaptop = $laptop->id;

        $kerusakanHP = [
            'Perbaikan port charger',
            'Flashing (Install ulang)',
            'Ganti Baterai',
            'Ganti LCD',
            'Bootloop',
            'Water damage',
            'TouchScreen error',
            'Kerusakan IC power',
            'Mati total',
            'Kerusakan fleksibel LCD',
            'Kerusakan MMC',
            'Speaker mati, tidak bersuara'
        ];
        $kerusakanKom = [
            'Cleaning dan ganti pasta prosessor',
            'Install ulang',
            'Upgrade RAM',
            'Kerusakan BIOS',
            'Kerusakan komponen VGA',
            'Kerusakan Power Supply',
            'Komponen Kotor dan berdebu',
            'Water damage',
            'Kerusakan Fleksibel',
            'CPU mati total',
            'Kerusakan RAM',
            'Kerusakan Prosessor',
            'Kerusakan Kamera',
            'Kerusakan motherboard',
            'Kerusakan fan atau heatsink',
            'Speaker mati tidak bersuara',
            'Kerusakan friver komputer',
            'Kerusakan pada LCD',
            'Kerusakan konektor USB',
            'Komputer lemot',
            'Upgrade sistem operasi',
            'Upgrade SSD',
            'Install Aplikasi',
            'Blue Screen',
            'Scan Virus & Malware'
        ];
        $kerusakanLP = [
            'Kerusakan fan atau heatsink',
            'Speaker mati tidak bersuara',
            'Kerusakan driver komputer',
            'Kerusakan konektor USB',
            'komputer lemot',
            'Update sistem operasi',
            'Upgrade SSD',
            'Install aplikasi',
            'Blue Screen',
            'Scan virus & malware'
        ];


        //INSERT DAFTAR KERUSAKAN HANDPHONE
        foreach ($kerusakanHP as $hp) {
            DaftarKerusakan::create([
                'jenis_kerusakan' => $hp,
                'device_id' => $idHandphone
            ]);
        }

        //INSERT DAFTAR KERUSAKAN LOMPUTER
        foreach ($kerusakanKom as $kom) {
            DaftarKerusakan::create([
                'jenis_kerusakan' => $kom,
                'device_id' => $idKomputer
            ]);
        }

        //INSERT DAFTAR KERUSAKAN LAPTOP
        foreach ($kerusakanLP as $lp) {
            DaftarKerusakan::create([
                'jenis_kerusakan' => $lp,
                'device_id' => $idLaptop
            ]);
        }
    }
}
