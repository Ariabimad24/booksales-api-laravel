<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGenreRequest;
use App\Http\Requests\UpdateGenreRequest;
use App\Models\Genre;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = Genre::all();

        return response()->json([
            'success' => true,
            'message' => 'Berhasil mengambil semua data genre',
            'data' => $genres,
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
    public function store(StoreGenreRequest $request)
    {
        $validated = $request->validated();

        $genre = Genre::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Berhasil membuat data genre!',
            'data' => $genre,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Genre $genre)
    {
        return response()->json([
            'success' => true,
            'message' => "Berhasil mengambil data genre id {$genre->id}",
            'data' => $genre,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGenreRequest $request, Genre $genre)
    {
        $validated = $request->validated();

        $genre->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Berhasil mengupdate data genre!',
            'data' => $genre->refresh(),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genre)
    {
        // Snapshot data yg sudah di delete jika ingin ditampilkan data setelah terhapus
        $snapshot = $genre->toArray();

        $genre->delete();

        return response()->json([
            'success' => true,
            'message' => 'Berhasil menghapus data genre!',
            'data' => $snapshot,
        ]);
    }
}
