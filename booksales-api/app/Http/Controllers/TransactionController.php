<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransactionRequest;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateTransactionRequest;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = Transaction::all();

        return response()->json([
            'success' => true,
            'message' => 'Berhasil mengambil semua data transaksi',
            'data' => $transactions,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTransactionRequest $request)
    {
        $validated = $request->validated();

        $transaction = Transaction::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Berhasil membuat data transaksi',
            'data' => $transaction,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        return response()->json([
            'success' => true,
            'message' => "Berhasil mengambil 1 data spesifik transaksi id: {$transaction->id}",
            'data' => $transaction,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransactionRequest $request, Transaction $transaction)
    {
        $user = Auth::user();

        if($user->id !== $transaction->customer_id){
            return response()->json([
                'message' => 'Dilarang, kamu bukan pemilik transaksi ini!',
            ],403);
        }

        $validated = $request->validated();

        $transaction->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Berhasil memperbarui data transaksi',
            'data' => $transaction->refresh()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        $user = Auth::user();

        if($user->id !== $transaction->customer_id){
            return response()->json([
                'message' => 'Dilarang, kamu bukan pemilik transaksi ini!',
            ],403);
        }

        $snapshot = $transaction->toArray();

        $transaction->delete();

        return response()->json([
            'success' => true,
            'message' => 'Berhasil menghapus data transaksi',
            'data' => $snapshot,
        ]);
    }
}
