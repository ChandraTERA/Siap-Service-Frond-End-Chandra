<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\TransactionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\LaporanPengguaController;
use App\Http\Controllers\PendapatanApiController;
use App\Http\Controllers\LaporanPenggunaController;
use App\Http\Controllers\LaporanPendaftarBaru;

// ...

//
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/transactions', [TransactionController::class, 'index']); // Menampilkan semua transaksi
Route::get('/transactions/{id}', [TransactionController::class, 'show']); // Menampilkan detail transaksi berdasarkan ID
Route::post('/transactions', [TransactionController::class, 'store']); // Membuat transaksi baru
Route::put('/transactions/{id}', [TransactionController::class, 'update']); // Memperbarui status transaksi berdasarkan ID
Route::delete('/transactions/{id}', [TransactionController::class, 'destroy']); // Menghapus transaksi berdasarkan ID

// Route::middleware(['auth:api', 'CheckCustomerAccess'])->group(function () {
//     Route::get('/kerusakan/create', 'KerusakanController@create')->name('kerusakan.create');
//     Route::post('/kerusakan/store', 'KerusakanController@store')->name('kerusakan.store');
//     Route::get('/kerusakan/confirm/{id}', 'KerusakanController@confirm')->name('kerusakan.confirm');
// });

Route::post('/pendapatan', [PendapatanApiController::class, 'store']);
Route::get('/pendapatan/view/pdf', [PendapatanApiController::class, 'view_pdf']);


Route::get('/laporanpengguna', [LaporanPenggunaController::class, 'index']);
Route::get('/laporanpendapatan/view/pdf', [LaporanPenggunaController::class, 'view_pdf']);

Route::get('/test', function () {
    return 'test';
});



Route::get('/laporan-pendaftar-baru', [LaporanPendaftarBaru::class, 'index']);
Route::get('/laporan-pendaftar-baru/cetak-pdf', [LaporanPendaftarBaru::class, 'view_pdf']);
