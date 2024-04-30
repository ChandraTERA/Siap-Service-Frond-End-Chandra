<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\transaction;
use Illuminate\Http\Request;
use App\Notifications\ValidationNotification;
use App\Models\PaymentValidation;

class PaymentControlller extends Controller
{
    public function validatePayment(Request $request)
    {
        // Ambil data permintaan validasi pembayaran dari database
        $paymentValidations = PaymentValidation::all();

        // Kirim notifikasi validasi pembayaran kepada admin
        foreach ($paymentValidations as $validation) {
            $admin = $validation->user->admin;

            // Kirim notifikasi dengan tautan ke halaman validasi
            $admin->notify(new ValidationNotification($validation));
        }

        // Redirect atau tampilkan pesan sukses
    }
}
