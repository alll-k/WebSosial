<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BeritaController::class, 'berita']);

Route::get('/jadwal', function () {
    return view('jadwal');
});

Route::get('/program', function () {
    return view('program');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/berita/{slug}', [BeritaController::class, 'tampilberita']);

Route::get('/daftar-relawan', function () {
    return view('daftar-relawan');
});

Route::post('/daftar-relawan/kirim', function () {
    return redirect('/daftar-relawan')->with('success', 'Pendaftaran berhasil!');
});
