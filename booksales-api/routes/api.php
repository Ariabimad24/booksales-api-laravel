<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::post('login',[AuthController::class,'login']);
Route::post('register',[AuthController::class,'register']);

Route::resource('transactions', TransactionController::class)
    ->middleware(['auth:sanctum','role:customer'])->only('store','update','show');

Route::resource('transactions', TransactionController::class)
    ->middleware(['auth:sanctum','role:admin'])->only('index','destroy');

Route::resource('authors', AuthorController::class)
    ->middleware(['auth:sanctum','role:admin'])->only(['store', 'update', 'destroy']);

Route::resource('genres', GenreController::class)
    ->middleware(['auth:sanctum','role:admin'])->only(['store', 'update', 'destroy']);

Route::resource('books', BookController::class);
