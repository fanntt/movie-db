<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MovieController::class, 'homepage'])->name('homepage');
Route::get('/movie/{id}', [MovieController::class, 'show'])->name('movies.detail');


// Menampilkan form
Route::get('/create-movie', [MovieController::class, 'create'])->middleware('auth');
Route::post('/create-movie', [MovieController::class, 'store'])->middleware('auth');

Route::get('/login', [AuthController::class, 'loginForm'])->name('login');

Route::post('/login', [AuthController::class, 'login']);


Route::post('/logout', [AuthController::class, 'logout']);

