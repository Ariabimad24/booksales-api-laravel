<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\GenreController;

Route::resource('authors', AuthorController::class);
Route::resource('genres',GenreController::class);


