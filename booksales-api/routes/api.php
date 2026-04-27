<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use Illuminate\Support\Facades\Route;

Route::post('login',[AuthController::class,'login']);
Route::post('register',[AuthController::class,'register']);

Route::resource('authors', AuthorController::class)
    ->middleware(['auth:sanctum','role:admin'])->only(['store', 'update', 'destroy']);

Route::resource('genres', GenreController::class)
    ->middleware(['auth:sanctum','role:admin'])->only(['store', 'update', 'destroy']);

Route::resource('books', BookController::class);
