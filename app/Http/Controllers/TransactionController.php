<?php

namespace App\Http\Controllers;

use App\Models\Transaction;

class TransactionController extends Controller
{
    //

    public function index()
    {
        $transaction = Transaction::all();
        return view('transaction.index', compact('transaction'));
    }


    public function validateTransaction($id)
    {

        $transaction = Transaction::find($id);

        if (!$transaction) {
            return abort(404); // Transaksi tidak ditemukan, tampilkan halaman 404.
        }

        // Validasi status transaksi
        if ($transaction->status !== 'Valid') {
            return redirect()->route('transactions.index')->with('error', 'Transaksi tidak valid.');
        }

        return view('transactions.index', compact('transaction'));
    }
}
