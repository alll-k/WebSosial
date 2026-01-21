<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Aktivitas;
use App\Models\User;

class AktifitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();

        if (!$user) {
            return;
        }

        $aktivitasData = [
            [
                'user_id' => $user->id,
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
            [
                'user_id' => $user->id,
                'judul' => 'Program Bimbingan Belajar Gratis',
                'deskripsi' => 'Memberikan bimbingan belajar gratis kepada anak-anak kurang mampu untuk meningkatkan prestasi akademik mereka. Fokus pada mata pelajaran Matematika, Bahasa Indonesia, dan IPA.',
                'tipe_aktivitas' => 'Pendidikan',
                'tanggal' => '2026-01-22',
                'waktu_mulai' => '14:00',
                'waktu_selesai' => '17:00',
                'lokasi' => 'Rumah Sinergis, Jl. Gatot Subroto',
                'jumlah_peserta' => 25,
                'status' => 'aktif',
            ],
            [
                'user_id' => $user->id,
                'judul' => 'Pemeriksaan Kesehatan Gratis',
                'deskripsi' => 'Kegiatan pemeriksaan kesehatan gratis meliputi pengecekan tekanan darah, tinggi badan, berat badan, dan konsultasi kesehatan dengan dokter. Disertai penyuluhan tentang gaya hidup sehat.',
                'tipe_aktivitas' => 'Kesehatan',
                'tanggal' => '2026-01-20',
                'waktu_mulai' => '09:00',
                'waktu_selesai' => '13:00',
                'lokasi' => 'Puskesmas Mangkubumen',
                'jumlah_peserta' => 40,
                'status' => 'selesai',
            ],
            [
                'user_id' => $user->id,
                'judul' => 'Penanaman Pohon di Taman Kota',
                'deskripsi' => 'Gerakan go green dengan menanam 100 pohon di Taman Kota untuk menjaga kelestarian lingkungan dan meningkatkan kualitas udara di kawasan perkotaan.',
                'tipe_aktivitas' => 'Lingkungan',
                'tanggal' => '2026-02-01',
                'waktu_mulai' => '07:00',
                'waktu_selesai' => '11:00',
                'lokasi' => 'Taman Kota Sriwedari',
                'jumlah_peserta' => 35,
                'status' => 'aktif',
            ],
            [
                'user_id' => $user->id,
                'judul' => 'Workshop Keterampilan Membuat Kerajinan Tangan',
                'deskripsi' => 'Pelatihan keterampilan membuat kerajinan tangan berbahan daur ulang seperti tas, dompet, dan hiasan rumah untuk meningkatkan pendapatan UMKM lokal.',
                'tipe_aktivitas' => 'Pemberdayaan Masyarakat',
                'tanggal' => '2026-01-28',
                'waktu_mulai' => '10:00',
                'waktu_selesai' => '15:00',
                'lokasi' => 'Balai Pelatihan Masyarakat',
                'jumlah_peserta' => 20,
                'status' => 'aktif',
            ],
        ];

        foreach ($aktivitasData as $data) {
            Aktivitas::create($data);
        }
    }
}
