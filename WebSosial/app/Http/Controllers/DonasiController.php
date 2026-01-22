<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DonasiController extends Controller
{
    // Landing donasi
    public function index()
    {
        $totalDana = DB::table('transaksi_donasi')
            ->where('status_pembayaran', 'berhasil')
            ->sum('jumlah_donasi');

        $totalDonatur = DB::table('transaksi_donasi')
            ->where('status_pembayaran', 'berhasil')
            ->count();

        return view('donasi', compact('totalDana', 'totalDonatur'));
    }

    // Form donasi
    public function showForm()
    {
        return view('donasi_form');
    }

    // Simpan donasi
    public function submit(Request $request)
    {
        $request->validate([
            'jumlah_donasi' => 'required|numeric|min:1000',
            'pesan_kebaikan' => 'nullable'
        ]);

        $kode = 'D-' . now()->format('YmdHis') . rand(100,999);

        DB::table('transaksi_donasi')->insert([
            'user_id'           => Auth::id(), // 🔒 KUNCI UTAMA
            'kode_transaksi'    => $kode,
            'nama_donatur'      => Auth::user()->name,
            'email'             => Auth::user()->email,
            'no_hp'             => Auth::user()->no_hp ?? '-',
            'jumlah_donasi'     => $request->jumlah_donasi,
            'metode_pembayaran' => 'Transfer Bank',
            'pesan_kebaikan'    => $request->pesan_kebaikan,
            'status_pembayaran' => 'pending',
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);

        // 🔁 REDIRECT (BEST PRACTICE)
        return redirect()->route('donasi.instruksi', $kode);
    }

    // Instruksi pembayaran
    public function instruksi($kode)
    {
        $donasi = DB::table('transaksi_donasi')
            ->where('kode_transaksi', $kode)
            ->where('user_id', Auth::id()) // 🔒 ANTI NGINTIP
            ->first();

        if (!$donasi) {
            abort(403);
        }

        return view('donasi_pembayaran', [
            'kode' => $donasi->kode_transaksi,
            'nominal' => $donasi->jumlah_donasi
        ]);
    }
}
