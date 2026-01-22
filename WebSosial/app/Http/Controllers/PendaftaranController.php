<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendaftaranRelawan;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class PendaftaranController extends Controller
{
    public function prosesVerifikasi(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'email'        => 'required|email',
            'no_wa'        => 'required',
            'kegiatan'     => 'required',
        ]);

        $otp = rand(100000, 999999);

        // 🔥 SAMAKAN SESSION
        Session::put('data_pendaftaran', $request->all());
        Session::put('otp_verifikasi', $otp);

        Mail::raw(
            "Halo {$request->nama_lengkap}, kode OTP Anda: {$otp}",
            function ($message) use ($request) {
                $message->to($request->email)
                        ->subject('Kode Verifikasi Relawan');
            }
        );

        return redirect()->route('relawan.otp.view');
    }

    public function simpanPermanen(Request $request)
    {
        $request->validate([
            'otp' => 'required|digits:6'
        ]);

        if ($request->otp != Session::get('otp_verifikasi')) {
            return back()->with('error', 'Kode OTP Salah!');
        }

        $data = Session::get('data_pendaftaran');

        // 🔥 PAKSA STATUS
        $data['status'] = 'Berhasil Terdaftar';

        PendaftaranRelawan::create($data);

        Session::forget(['data_pendaftaran', 'otp_verifikasi']);

        return redirect('/home')->with('success', 'Pendaftaran berhasil!');
    }
}
