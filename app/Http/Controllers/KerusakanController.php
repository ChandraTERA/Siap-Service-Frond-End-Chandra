<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kerusakan;

class KerusakanController extends Controller
{
    public function store(Request $request)
    {
        // // Validasi input dari formulir
        // $request->validate([
        //     // Atur aturan validasi sesuai kebutuhan Anda
        // ]);

        // Simpan data kerusakan ke dalam database
        $kerusakan = new Kerusakan;
        $kerusakan->user_id = auth()->user()->id; // Admin yang membuat kerusakan
        $kerusakan->nama_lengkap = $request->input('nama_lengkap');
        $kerusakan->no_telepon = $request->input('no_telepon');
        $kerusakan->solusi_kerusakan = $request->input('solusi_kerusakan');
        $kerusakan->biaya_service = $request->input('biaya_service');
        $kerusakan->total_pembayaran = $request->input('total_pembayaran');
        // $kerusakan->konfirmasi_mandiri = $request->has('konfirmasi_mandiri'); // Ambil nilai opsi

        $kerusakan->save();

        // Redirect ke halaman yang sesuai
        return redirect()->route('kerusakan.show', $kerusakan->id);
    }
    public function create()
    {
        return view('kerusakan.create');
    }

    public function show($id)
    {
        // Tampilkan detail kerusakan dengan ID tertentu
        $kerusakan = Kerusakan::findOrFail($id);

        return view('kerusakan.show', compact('kerusakan'));
    }

    public function confirm($id)
    {
        // Konfirmasi pembayaran jika diperbolehkan
        $kerusakan = Kerusakan::findOrFail($id);

        if ($kerusakan->konfirmasi_mandiri) {
            // Izinkan pelanggan untuk mengkonfirmasi pesanan mandiri
            // Lakukan tindakan yang sesuai untuk mengizinkan konfirmasi mandiri
        } else {
            // Tampilkan pesan kesalahan atau kembalikan ke halaman sebelumnya
        }
    }
}
