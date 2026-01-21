<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DonasiController extends Controller
{
    /**
     * Menampilkan halaman utama donasi dengan angka riil dari DB utama
     */
    public function index()
    {
        // Mengambil total dana yang statusnya 'berhasil'
        $totalDana = DB::table('transaksi_donasi')
                        ->where('status_pembayaran', 'berhasil')
                        ->sum('jumlah_donasi');

        // Menghitung jumlah donatur yang pembayarannya sukses
        $totalDonatur = DB::table('transaksi_donasi')
                           ->where('status_pembayaran', 'berhasil')
                           ->count();

        return view('donasi', compact('totalDana', 'totalDonatur'));
    }

    /**
     * Menampilkan form input data diri donatur
     */
    public function showForm()
    {
        return view('donasi_form');
    }

    /**
     * Memproses transaksi ke database dengan status pending
     */
    public function submit(Request $request) 
    {
        // Validasi input: jumlah_donasi minimal 1 Rupiah
        $request->validate([
            'nama_donatur' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required',
            'jumlah_donasi' => 'required|numeric|min:1', 
        ]);

        $kodeTransaksi = 'D-' . date('Ymd') . rand(1000, 9999);

        // Simpan data ke database transaksi_donasi
        DB::table('transaksi_donasi')->insert([
            'kode_transaksi'    => $kodeTransaksi,
            'nama_donatur'      => $request->nama_donatur,
            'email'             => $request->email,
            'no_hp'             => $request->no_hp,
            'jumlah_donasi'     => $request->jumlah_donasi,
            'metode_pembayaran' => 'Transfer Bank', // Mengatasi error SQLSTATE 1364
            'pesan_kebaikan'    => $request->pesan_kebaikan,
            'status_pembayaran' => 'pending', 
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);

        return view('donasi_pembayaran', [
            'kode'    => $kodeTransaksi,
            'nominal' => $request->jumlah_donasi,
            'nama'    => $request->nama_donatur
        ]);
    }
}