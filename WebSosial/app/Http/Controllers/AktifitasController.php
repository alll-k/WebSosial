<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class AktifitasController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        if (!$user) {
            return redirect('/profil');
        }

        // Data statis aktivitas untuk demo
        $aktivitas = collect([
            (object)[
                'id' => 1,
                'judul' => 'Bakti Sosial Pemberian Sembako',
                'deskripsi' => 'Kegiatan membagikan sembako ke masyarakat kurang mampu di Kelurahan Mangkubumen. Kami menyiapkan 50 paket sembako yang berisi beras, minyak, gula, dan telur.',
                'tipe_aktivitas' => 'Bakti Sosial',
                'tanggal' => '2026-01-25',
                'waktu_mulai' => '08:00',
                'waktu_selesai' => '12:00',
                'lokasi' => 'Kelurahan Mangkubumen, Surakarta',
                'jumlah_peserta' => 15,
                'status' => 'aktif',
            ],
            (object)[
                'id' => 2,
                'judul' => 'Program Bimbingan Belajar Gratis',
                'deskripsi' => 'Memberikan bimbingan belajar gratis kepada anak-anak kurang mampu untuk meningkatkan prestasi akademik mereka.',
                'tipe_aktivitas' => 'Pendidikan',
                'tanggal' => '2026-01-22',
                'waktu_mulai' => '14:00',
                'waktu_selesai' => '17:00',
                'lokasi' => 'Rumah Sinergis, Jl. Gatot Subroto',
                'jumlah_peserta' => 25,
                'status' => 'aktif',
            ],
            (object)[
                'id' => 3,
                'judul' => 'Pemeriksaan Kesehatan Gratis',
                'deskripsi' => 'Kegiatan pemeriksaan kesehatan gratis meliputi pengecekan tekanan darah, tinggi badan, dan konsultasi dengan dokter.',
                'tipe_aktivitas' => 'Kesehatan',
                'tanggal' => '2026-01-20',
                'waktu_mulai' => '09:00',
                'waktu_selesai' => '13:00',
                'lokasi' => 'Puskesmas Mangkubumen',
                'jumlah_peserta' => 40,
                'status' => 'selesai',
            ],
            (object)[
                'id' => 4,
                'judul' => 'Penanaman Pohon di Taman Kota',
                'deskripsi' => 'Gerakan go green dengan menanam 100 pohon di Taman Kota untuk menjaga kelestarian lingkungan.',
                'tipe_aktivitas' => 'Lingkungan',
                'tanggal' => '2026-02-01',
                'waktu_mulai' => '07:00',
                'waktu_selesai' => '11:00',
                'lokasi' => 'Taman Kota Sriwedari',
                'jumlah_peserta' => 35,
                'status' => 'aktif',
            ],
            (object)[
                'id' => 5,
                'judul' => 'Workshop Keterampilan Membuat Kerajinan Tangan',
                'deskripsi' => 'Pelatihan keterampilan membuat kerajinan tangan berbahan daur ulang untuk meningkatkan pendapatan UMKM lokal.',
                'tipe_aktivitas' => 'Pemberdayaan Masyarakat',
                'tanggal' => '2026-01-28',
                'waktu_mulai' => '10:00',
                'waktu_selesai' => '15:00',
                'lokasi' => 'Balai Pelatihan Masyarakat',
                'jumlah_peserta' => 20,
                'status' => 'aktif',
            ],
        ]);
        
        $stat = [
            'total' => $aktivitas->count(),
            'aktif' => $aktivitas->where('status', 'aktif')->count(),
            'selesai' => $aktivitas->where('status', 'selesai')->count(),
            'peserta' => $aktivitas->sum('jumlah_peserta'),
        ];

        return view('aktivitas-saya', compact('aktivitas', 'stat'));
    }
}
