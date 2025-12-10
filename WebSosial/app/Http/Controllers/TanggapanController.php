<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tanggapan;

class TanggapanController extends Controller
{

  public function tanggapan() {
    return view('beritaa', [
        'title' => 'Tanggapan',
        'tanggapans' => Tanggapan::ambiltanggapan(),
        'new_tanggapan' => null, // definisikan agar variabel tersedia
    ]);
}

public function tampiltanggapan($tanggapanKey) {
    return view('beritaa', [
        'title' => 'Tanggapan',
        'tanggapans' => Tanggapan::ambiltanggapan(),
        'new_tanggapan' => Tanggapan::caritanggapan($tanggapanKey),
    ]);
}


}