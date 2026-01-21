<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aktivitas extends Model
{
    protected $table = 'aktivitas';
    
    protected $fillable = [
        'user_id',
        'judul',
        'deskripsi',
        'tipe_aktivitas',
        'tanggal',
        'waktu_mulai',
        'waktu_selesai',
        'lokasi',
        'jumlah_peserta',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
