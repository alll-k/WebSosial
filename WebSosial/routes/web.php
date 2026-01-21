<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AktifitasController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; // Penting untuk logika role di dalam rute

// --- 1. AKSES PUBLIK (Tamu / Guest) ---
// Laman Home yang menyediakan informasi umum dan berita terbaru tanpa akun
Route::get('/', [BeritaController::class, 'berita']);
Route::get('/jadwal', function () { return view('jadwal'); });
Route::get('/program', function () { return view('program'); });
Route::get('/tentang', function () { return view('tentang'); });
Route::get('/prokegi', function () { return view('prokegi'); });
Route::get('/daftar', function () { return view('daftar'); });
Route::get('/gabung', function () { return view('gabung '); });
Route::get('/berita/{slug}', [BeritaController::class, 'tampilberita']);

// --- 2. AUTHENTICATION SYSTEM (Hanya untuk Tamu) ---
// Middleware 'guest' memastikan user yang sudah login tidak bisa kembali ke laman login
Route::middleware(['guest'])->group(function () {
    Route::get('/profil', function () { return view('profil'); })->name('login');
    Route::post('/login-proses', [AuthController::class, 'login'])->name('login.post');
    Route::post('/register-proses', [AuthController::class, 'register'])->name('register.post');
});

// --- 3. AKSES TERPROTEKSI (User Biasa & Admin) ---
// Middleware 'auth' menjaga agar fitur hanya bisa diakses setelah login
Route::middleware(['auth'])->group(function () {

    // --- LAMAN USER (Role 0) ---
    // Ditujukan bagi relawan terdaftar untuk akses fitur lengkap dan donasi
    Route::get('/home', [AktifitasController::class, 'index']);

    // --- LAMAN ADMIN (Role 1) ---
    // Dilengkapi fitur khusus administrator untuk mengelola sistem dan konten
Route::get('/admin/dashboard', function () {
    if (Auth::user()->role != 1) {
        return redirect('/home');
    }

    // Ambil data berita agar variabel $beritas tidak undefined
    $beritas = app(App\Http\Controllers\BeritaController::class)->berita()->getData()['beritas'];

    return view('admin.dashboarda', compact('beritas'));
});
    // Fitur Bersama (Akses Akun & Logout)
    Route::post('/update-password', [AuthController::class, 'updatePassword'])->name('password.update');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// --- 4. FORM PENDAFTARAN RELAWAN (PUBLIC) ---
Route::get('/pendaftaran-relawan', function () {
    return view('pendaftaranrelawan');
});

// Proses simpan pendaftaran
Route::post('/pendaftaran-relawan/simpan', function (\Illuminate\Http\Request $request) {
    $validated = $request->validate([
        'nama_lengkap' => 'required|string|max:255',
        'nama_panggilan' => 'nullable|string|max:255',
        'tempat_lahir' => 'required|string|max:255',
        'tanggal_lahir' => 'required|date',
        'alamat' => 'required|string',
        'no_wa' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'instansi' => 'nullable|string|max:255',
        'keahlian' => 'nullable|string',
        'alasan' => 'required|string',
        'pengalaman' => 'nullable|string',
        'kegiatan' => 'nullable|string|max:255',
        'tanggal_kegiatan' => 'nullable|string|max:255',
        'jam_kegiatan' => 'nullable|string|max:255',
        'lokasi_kegiatan' => 'nullable|string|max:255',
    ]);

    \App\Models\PendaftaranRelawan::create($validated);

    return redirect('/gabung')->with('success', 'Pendaftaran berhasil dikirim!');
});
