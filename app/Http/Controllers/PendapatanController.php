<?php

namespace App\Http\Controllers;

// use Mpdf\Mpdf;
use App\Models\Pendapatan;
use Illuminate\Http\Request;



class PendapatanController extends Controller
{
    public function index()
    {
        return view('pendapatan.index');
    }

    public function show($id)
    {
        $pendapatan = Pendapatan::find($id);
        return view('pendapatan.show', ['pendapatan' => $pendapatan]);
    }

    public function cetakLaporan(Request $request)
    {
        $tanggalMulai = $request->input('tanggal_mulai');
        $tanggalAkhir = $request->input('tanggal_akhir');

        $pendapatan = Pendapatan::whereBetween('tanggal', [$tanggalMulai, $tanggalAkhir])->get();

        return view('pendapatan.cetak', ['pendapatan' => $pendapatan]);
    }

    // function view_pdf()
    // {
    //     $pendapatan = Pendapatan::all();

    //     $mpdf = new Mpdf();
    //     $html = view('pendapatan.cetak', ['pendapatan' => $pendapatan])->render();
    //     $mpdf->WriteHTML($html);
    //     $mpdf->Output();
    // }
}
