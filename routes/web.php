<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\DeviceController;

use App\Http\Controllers\GoogleController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AUTH\AuthController;
use App\Http\Controllers\AUTH\LoginController;
use App\Http\Controllers\AUTH\RegisterController;
use App\Http\Controllers\AUTH\ResetPasswordController;
use App\Http\Controllers\KerusakanController;
use App\Http\Controllers\TransactionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// LANDING PAGE
Route::get('/', function () {
    return view('LandingPage');
});

// FORGOT & RESET PASSWORD
Route::post('/send_reset_password_email', [ResetPasswordController::class, 'forgot_password']);
Route::put('/otp_reset_password', [ResetPasswordController::class, 'otp_reset_password']);
Route::put('/resend_otp_reset_password', [ResetPasswordController::class, 'resend_otp_password']);
Route::put('/reset_password', [ResetPasswordController::class, 'reset_password']);

// REGISTRASI CUSTOMER
Route::put('/verifikasi-email', [RegisterController::class, 'do_verifikasi_email']);
Route::post('/register-pengguna', [RegisterController::class, 'do_register']);
Route::put('/resend-otp-verif-email', [RegisterController::class, 'resend_otp']);

// LOGIN ADMIN & CUSTOMER
Route::post('/login-admin', [LoginController::class, 'do_login_admin']);
Route::post('/login-pengguna', [LoginController::class, 'do_login_customer']);

Route::get('/logout', [LoginController::class, 'logout']);
Route::put('/update-data-diri', [UserController::class, 'updateDataCustomer']);

Route::get('/get_data_device', [DeviceController::class, 'getDevice'])->middleware('auth');

// CUSTOMER
Route::get('/pembayaran', function () {
    return view('customer.pembayaran');
});

Route::get('/metode-pembayaran', function () {
    return view('customer.metode_pembayaran');
});

Route::get('/edit-metode-pembayaran', function () {
    return view('customer.edit_metode_pembayaran');
});

Route::get('/after-pembayaran', function () {
    return view('customer.after_pembayaran');
});

Route::get('/informasi-pembayaran', function () {
    return view('customer.informasi_pembayaran');
});

Route::get('/upload-bukti-pembayaran', function () {
    return view('customer.upload_bukti_pembayaran');
});

Route::get('/nota-pembayaran', function () {
    return view('customer.nota_pembayaran');
});

//only for testing
// Route::get('/print', function () {
//     return view('customer.print_nota');
// });

Route::get('/lupa-password', function () {
    return view('customer.lupa_password');
});

Route::get('/verifikasi-password', function () {
    return view('customer.kode_verifikasi');
});

Route::get('/reset-password', function () {
    return view('customer.reset_password');
});


// ADMIN
Route::get('/tambah-pengguna', function () {
    return view('admin.tambah_pengguna');
});

Route::get('/tambah-kerusakan', function () {
    return view('admin.tambah_kerusakan');
});

Route::get('/data-transaksi', function () {
    return view('admin.data_transaksi');
});

Route::get('/detail-transaksi', function () {
    return view('admin.detail_transaksi');
});

Route::get('/register', function () {
    return view('REGISTER.register');
});

Route::get('/verifikasi', function () {
    return view('REGISTER.verifikasi');
});
Route::get('/verifikasi2', function () {
    return view('REGISTER.verifikasi_expired');
});
Route::get('/login', function () {
    return view('LOGIN.login');
});

Route::get('/login-admin', function () {
    return view('admin.auth.login_admin');
});

Route::get('/dashboard-admin', function () {
    return view('admin.dashboard_admin');
});

Route::get('/pendapatan-admin', function () {
    return view('admin.pendapatan');
});

Route::get('/notifikasi-pembayaran', function () {
    return view('admin.notifikasi_pembayaran');
});

Route::get('/profile-admin', function () {
    return view('admin.profile');
});

Route::get('/pengguna-admin', function () {
    return view('admin.pengguna');
});

Route::get('/detail-pengguna', function () {
    return view('admin.detail_pengguna');
});
