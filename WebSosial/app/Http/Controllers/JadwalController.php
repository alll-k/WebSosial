<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Program;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        // Ambil kegiatan yang sudah mendatang (tanggal >= hari ini), diurutkan terbaru dulu
        $kegiatans = Kegiatan::where('tanggal', '>=', today())
            ->latest('tanggal')
            ->get();

        // Ambil program, diurutkan terbaru dulu
        $programs = Program::latest('created_at')->get();

        // Gabungkan kegiatan dan program dengan merge (bukan union)
        $daftarKegiatan = collect($kegiatans)->merge($programs)->sortByDesc('created_at');

        return view('jadwal', compact('daftarKegiatan'));
    }
}
