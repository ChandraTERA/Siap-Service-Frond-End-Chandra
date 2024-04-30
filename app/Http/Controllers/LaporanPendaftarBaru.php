<?php

namespace App\Http\Controllers;

use \Mpdf\Mpdf;
use App\Models\User;
use App\Models\UserM;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\LaporanPenggunaResource;

class LaporanPendaftarBaru extends Controller
{
    public function index()
    {
        $pendaftarbaru = UserM::where('is_verified', true)->where('role', 0)->get();


        return LaporanPenggunaResource::collection($pendaftarbaru);
    }


    // public function view_pdf()
    // {
    //     $pendaftarbaru = UserM::where('is_verified', true)->where('role', 0)->get();

    //     $mpdf = new \Mpdf\Mpdf();
    //     $html = view('laporanpendaftarbaru.cetak', ['pendaftarbaru' => $pendaftarbaru])->render();
    //     $mpdf->WriteHTML($html);
    //     $mpdf->Output();
    // }
}
