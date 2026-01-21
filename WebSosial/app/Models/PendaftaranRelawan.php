<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftaranRelawan extends Model
{
    use HasFactory;

    protected $table = 'pendaftaran_relawan'; // Nama tabel di DB utama

    // Daftarkan semua kolom agar bisa disimpan oleh Laravel
    protected $fillable = [
        'nama_lengkap', 
        'email', 
        'no_wa', 
        'alamat', 
        'alasan', 
        'tempat_lahir', 
        'tanggal_lahir', 
        'kegiatan'
    ];
}