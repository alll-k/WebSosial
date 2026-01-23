<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    protected $table = 'kegiatan';
    protected $fillable = ['nama', 'lokasi', 'tanggal', 'jam', 'deskripsi', 'foto', 'created_by'];

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
