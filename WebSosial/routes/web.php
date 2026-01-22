<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AktifitasController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\PendaftaranController;

/*
|--------------------------------------------------------------------------
| 1. AKSES PUBLIK
|--------------------------------------------------------------------------
*/
Route::get('/', [BeritaController::class, 'berita']);
Route::get('/jadwal', fn () => view('jadwal'));
Route::get('/program', fn () => view('program'));
Route::get('/tentang', fn () => view('tentang'));
Route::get('/prokegi', fn () => view('prokegi'));
Route::get('/daftar', fn () => view('daftar')); 
Route::get('/gabung', fn () => view('gabung'));
Route::get('/berita/{slug}', [BeritaController::class, 'tampilberita']);

/*
|--------------------------------------------------------------------------
| 2. AUTH & GUEST (Hanya bisa diakses jika BELUM login)
|--------------------------------------------------------------------------
*/
Route::middleware('guest')->group(function () {
    // Menampilkan Halaman Login
    Route::get('/login', fn () => view('login'))->name('login');
    
    // Proses Login & Register
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    Route::post('/register', [AuthController::class, 'register'])->name('register.post');
});

/*
|--------------------------------------------------------------------------
| 3. AUTH REQUIRED (Hanya bisa diakses jika SUDAH login)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    
    // --- KHUSUS ROLE ADMIN (Role 1) ---
    Route::get('/admin/dashboard', function () {
        if (auth()->user()->role != 1) {
            return redirect('/home')->with('error', 'Anda tidak memiliki akses admin.');
        }
        return view('admin.dashboarda'); 
    })->name('admin.dashboard');

    // Route untuk Form Update Password di Dashboard Admin
    Route::post('/admin/update-password', [AuthController::class, 'updatePassword'])->name('password.update');

    // --- KHUSUS ROLE USER/RELAWAN (Role 0) ---
    Route::get('/home', [AktifitasController::class, 'index'])->name('home');
    Route::get('/profil', fn () => view('profil'))->name('profil');

    // --- DONASI (Wajib Login) ---
    Route::get('/donasi/form', [DonasiController::class, 'showForm'])->name('donasi.form');
    Route::post('/donasi/submit', [DonasiController::class, 'submit'])->name('donasi.submit');
    Route::get('/donasi/instruksi/{kode}', [DonasiController::class, 'instruksi'])->name('donasi.instruksi');

    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

/*
|--------------------------------------------------------------------------
| 4. DONASI (PUBLIK - Tanpa Login)
|--------------------------------------------------------------------------
*/
Route::get('/donasi', [DonasiController::class, 'index'])->name('donasi.index');

/*
|--------------------------------------------------------------------------
| 5. PENDAFTARAN RELAWAN (Alur Khusus)
|--------------------------------------------------------------------------
*/
Route::prefix('pendaftaran-relawan')->group(function () {
    Route::get('/', fn () => view('pendaftaranrelawan'))->name('relawan.daftar');
    Route::post('/verifikasi-email', [PendaftaranController::class, 'prosesVerifikasi'])->name('relawan.verifikasi');
    Route::get('/otp', fn () => view('verifikasi_otp'))->name('relawan.otp.view');
    Route::post('/final-simpan', [PendaftaranController::class, 'simpanPermanen'])->name('relawan.simpan');
});