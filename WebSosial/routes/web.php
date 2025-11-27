<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KegiatanController; // ← TEMPATKAN DI SINI
// ROUTE HOME
Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

// ROUTE PROFILE
Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile"
    ]);
});

// =====================================
// ROUTE KEGIATAN (TAMBAH DI BAGIAN INI)
// =====================================
Route::get('/kegiatan', [KegiatanController::class, 'index']);
Route::get('/kegiatan/tambah', [KegiatanController::class, 'create']);
Route::post('/kegiatan/store', [KegiatanController::class, 'store']);
