<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();
        return response()->json($transactions);
    }

    public function show($id)
    {
        $transaction = Transaction::find($id);

        if (!$transaction) {
            return response()->json(['message' => 'Transaksi tidak ditemukan'], 404);
        }

        return response()->json($transaction);
    }

    public function store(Request $request)
    {
        // Validasi input dari request jika diperlukan

        $transaction = Transaction::create([
            // Isi dengan data transaksi dari request
        ]);

        return response()->json($transaction, 201);
    }

    public function update(Request $request, $id)
    {
        // Validasi input dari request jika diperlukan

        $transaction = Transaction::find($id);

        if (!$transaction) {
            return response()->json(['message' => 'Transaksi tidak ditemukan'], 404);
        }

        // Update status transaksi berdasarkan input dari request

        return response()->json($transaction, 200);
    }

    public function destroy($id)
    {
        $transaction = Transaction::find($id);

        if (!$transaction) {
            return response()->json(['message' => 'Transaksi tidak ditemukan'], 404);
        }

        $transaction->delete();
        return response()->json(['message' => 'Transaksi telah dihapus'], 200);
    }
}
