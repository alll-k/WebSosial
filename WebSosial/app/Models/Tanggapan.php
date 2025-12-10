<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
   private static $data_tanggapan = [
        [
        "tanggapan" => "Gempa Bumi 2,3 SR Melanda Solo Raya",
        "penuliss" => "Relawan",
        "isi" => "Tanggapan kami sangatlah menarik."
        ],
        
        [
        "tanggapan" => "Banjir Cisurupan Garut hari ini, Bupati Garut: bangunan pemicu banjir harus dibongkar",
        "penuliss" => "Relawan",
        "isi" => "Tanggapan kamicukup prihatin"
        ],

        [
        "tanggapan" => "Pelatihan UMKM Lokal Generasi Sekarang",
        "penuliss" => "Relawan",
        "isi" => "Tanggapan kami duar."
        ]
    ];

    public static function ambiltanggapan()
    {
        return self:: $data_tanggapan;
    }

    public static function caritanggapan ($key)
    {
        foreach (self::$data_tanggapan as $tanggapan) {
            if ($tanggapan["tanggapan"] === $key) {
                return $tanggapan;
            }
        }

        return null;
    }

}
