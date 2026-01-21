<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AktifitasController;
use App\Http\Controllers\DonasiController; // Tambahkan ini
use App\Http\Controllers\PendaftaranController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// --- 1. AKSES PUBLIK ---
Route::get('/', [BeritaController::class, 'berita']);
Route::get('/jadwal', function () { return view('jadwal'); });
Route::get('/program', function () { return view('program'); });
Route::get('/tentang', function () { return view('tentang'); });
Route::get('/prokegi', function () { return view('prokegi'); });
Route::get('/daftar', function () { return view('daftar'); });
Route::get('/gabung', function () { return view('gabung'); });
Route::get('/berita/{slug}', [BeritaController::class, 'tampilberita']);

// Halaman Utama (Data Riil)
Route::get('/donasi', [App\Http\Controllers\DonasiController::class, 'index'])->name('donasi.index');

// Form Input
Route::get('/donasi/form', [App\Http\Controllers\DonasiController::class, 'showForm'])->name('donasi.form');

// Proses Simpan
Route::post('/donasi/submit', [App\Http\Controllers\DonasiController::class, 'submit'])->name('donasi.submit');

// --- 3. AUTHENTICATION SYSTEM ---
Route::middleware(['guest'])->group(function () {
    Route::get('/profil', function () { return view('profil'); })->name('login');
    Route::post('/login-proses', [AuthController::class, 'login'])->name('login.post');
    Route::post('/register-proses', [AuthController::class, 'register'])->name('register.post');
});

// --- 4. AKSES TERPROTEKSI ---
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [AktifitasController::class, 'index']);

    Route::get('/admin/dashboard', function () {
        if (Auth::user()->role != 1) { return redirect('/home'); }
        $beritas = app(BeritaController::class)->berita()->getData()['beritas'];
        return view('admin.dashboarda', compact('beritas'));
    });

    Route::post('/update-password', [AuthController::class, 'updatePassword'])->name('password.update');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// --- 5. PENDAFTARAN RELAWAN ---
Route::get('/pendaftaran-relawan', function () { return view('pendaftaranrelawan'); });
Route::post('/pendaftaran-relawan/verifikasi-email', [PendaftaranController::class, 'prosesVerifikasi'])->name('relawan.verifikasi');
Route::get('/pendaftaran-relawan/otp', function () { return view('verifikasi_otp'); })->name('relawan.otp.view');
Route::post('/pendaftaran-relawan/final-simpan', [PendaftaranController::class, 'simpanPermanen'])->name('relawan.simpan');