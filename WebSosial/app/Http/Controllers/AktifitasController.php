<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\PendaftaranRelawan;

class AktifitasController extends Controller
{
    public function index()
    {
        // Ambil user yang login
        $user = Auth::user();

        // Jika belum login
        if (!$user) {
            return redirect('/profil');
        }

        // 🔥 Ambil RIWAYAT PENDAFTARAN dari database
        // Disesuaikan dengan email user login
        $aktivitas = PendaftaranRelawan::where('email', $user->email)
                        ->orderBy('created_at', 'desc')
                        ->get();

        // Statistik
        $stat = [
            'total'   => $aktivitas->count(),
            'aktif'   => $aktivitas->where('status', 'Berhasil Terdaftar')->count(),
            'selesai' => $aktivitas->where('status', 'Selesai')->count(),
            'peserta' => $aktivitas->count(), // user = 1 peserta
        ];

        return view('aktivitas-saya', compact('aktivitas', 'stat'));
    }
}
