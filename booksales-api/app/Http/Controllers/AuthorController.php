<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::all();

        return response()->json([
            'success' => true,
            'message' => 'Berhasil mengambil semua data author',
            'data' => $authors,
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
    public function store(StoreAuthorRequest $request)
    {
        $validated = $request->validated();

        $author = Author::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Berhasil membuat data author!',
            'data' => $author,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        return response()->json([
            'success' => true,
            'message' => "Berhasil mengambil data author id {$author->id}",
            'data' => $author,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAuthorRequest $request, Author $author)
    {
        $validated = $request->validated();

        $author->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Berhasil mengupdate data author!',
            'data' => $author->refresh(),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        // Snapshot data yg sudah di delete jika ingin ditampilkan data setelah terhapus
        $snapshot = $author->toArray();

        $author->delete();

        return response()->json([
            'success' => true,
            'message' => 'Berhasil menghapus data author!',
            'data' => $snapshot,
        ]);
    }
}
