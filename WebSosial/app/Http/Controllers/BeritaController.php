<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{

   public function berita () {
    $beritas = Berita::latest()->get();

    return view('home', [
        'title' => 'Berita',
        'beritas' => $beritas,
    ]);
}

    public function tampilberita ($slugp) {

    $berita = Berita::where('slug', $slugp)->firstOrFail();

    return view('beritaa', [
        'new_berita' => $berita,
    ]);
}

}
