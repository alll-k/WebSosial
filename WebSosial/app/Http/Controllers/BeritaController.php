<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{

   public function berita () {

    return view ('home', [
        "title" => "Berita",
        "beritas" => Berita ::ambilberita(),
    ]);
}

    public function tampilberita ($slugp) {

    return view ('beritaa', [
        "new_berita" => Berita::cariberita($slugp),
    ]);
}

}
