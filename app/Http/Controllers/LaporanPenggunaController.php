<?php

namespace App\Http\Controllers;

// use Mpdf\Mpdf;
use App\Http\Resources\LaporanPenggunaResource;
use Illuminate\Http\Request;
use App\Models\LaporanPengguna;
use App\Models\UserM;

class LaporanPenggunaController extends Controller
{
    public function index()
    {

        $getPengguna = UserM::get();
        foreach ($getPengguna as $user) {
            if ($user->is_verified == true && $user->role == 0) {
                $filteredUsers[] = $user;
            }
        }
        return LaporanPenggunaResource::collection($filteredUsers);
    }


    public function show($id)
    {
        $laporanpengguna = LaporanPengguna::findOrFail($id);
    }


    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|numeric',
            'nama' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',

        ]);
    }

    // function view_pdf()
    // {
    //     $laporanpengguna = LaporanPengguna::all();

    //         $mpdf = new \Mpdf\Mpdf();
    //         $html = view('laporanpengguna.cetak', ['laporanpengguna' => $laporanpengguna])->render();
    //         $mpdf->WriteHTML($html);
    //         $mpdf->Output();

    // }
    // 
}
