<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
       private static $data_berita = [
        [
        "judul" => "Gempa Bumi 2,3 SR Melanda Solo Raya",
        "slug" => "gempa-bumi-2,3-sr-melanda-solo-raya",
        "penulis" => "BMKG",
        "konten" => "Gempa bermagnitudo 2,3 SR mengguncang Solo Raya pada Senin pagi.
        Relawan kami telah turun untuk pengecekan dan mengumpulkan data masyarakat."
        ],

        [
        "judul" => "Banjir Cisurupan Garut hari ini, Bupati Garut: bangunan pemicu banjir harus dibongkar",
        "slug" => "banjir-cisurupan-garut-hari-ini,-bupati-garut:-bangunan-pemicu-banjir-harus-dibongkar",
        "penulis" => "ANTARA JABAR",
        "konten" => "Bupati Garut Abdusy Syakur Amin menyatakan bangunan yang berdiri menghalangi saluran air
        dan menjadi pemicu terjadinya banjir di Kecamatan Cisurupan, Kabupaten Garut, Jawa Barat harus dibongkar
        agar tidak lagi banjir akibat luapan dari saluran air saat musim hujan."
        ],

        [
        "judul" => "Pelatihan UMKM Lokal Generasi Sekarang",
        "slug" => "pelatihan-umkm-lokal-generasi-sekarang",
        "penulis" => "DIGITALENT",
        "konten" => "Program Digital Entrepreneurship Academy (DEA) merupakan beasiswa pelatihan yang ditujukan
        untuk masyarakat umum calon pelaku Usaha Mikro, Kecil, dan Menengah (UMKM), serta pelaku usaha
        UMKM yang ingin naik kelas dalam hal pemanfaatan teknologi digital untuk dapat meningkatkan usahanya."
        ]
    ];

    public static function ambilberita()
    {
        return Self:: $data_berita;
    }

    public static function cariberita ($slug)
    {
        $data_beritas = Self:: $data_berita;

            $new_berita = [];
    foreach($data_beritas as $berita)
    {
        if ($berita["slug"] === $slug)
        {
            $new_berita = $berita;
        }
    }

    return $new_berita;

    }
}
