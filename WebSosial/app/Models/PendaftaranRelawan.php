<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PendaftaranRelawan extends Model
{
    protected $table = 'pendaftaran_relawan';

    protected $fillable = [
        'nama_lengkap',
        'nama_panggilan',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'no_wa',
        'email',
        'instansi',
        'keahlian',
        'alasan',
        'pengalaman',
        'kegiatan',
        'tanggal_kegiatan',
        'jam_kegiatan',
        'lokasi_kegiatan',
        'status',
    ];
}
