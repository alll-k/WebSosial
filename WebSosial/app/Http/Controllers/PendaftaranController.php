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
    // 1. Validasi Input
    $request->validate([
        'nama_lengkap' => 'required',
        'email'        => 'required|email',
        'no_wa'        => 'required',
        'kegiatan'     => 'required',
    ]);

    // 2. Buat Kode OTP
    $otp = rand(100000, 999999);

    // 3. Simpan data sementara di Session
    session(['temp_relawan' => $request->all()]);
    session(['otp_code' => $otp]);

    // 4. Kirim Email (Pastikan .env sudah benar)
    \Mail::raw("Halo {$request->nama_lengkap}, kode verifikasi Anda: {$otp}", function ($message) use ($request) {
        $message->to($request->email)->subject('Kode Verifikasi Relawan+');
    });

    // 5. Pindah ke halaman input OTP (view tanpa folder)
    return redirect()->route('relawan.otp.view');
}

    public function simpanPermanen(Request $request)
    {
        // Cek jika OTP cocok
        if ($request->otp == Session::get('otp_verifikasi')) {
            $data = Session::get('data_pendaftaran');
            
            // Simpan ke Database Kedua (mysql_second)
            PendaftaranRelawan::create($data);

            Session::forget(['data_pendaftaran', 'otp_verifikasi']);
            return redirect('/')->with('success', 'Pendaftaran Berhasil!');
        }

        return back()->with('error', 'Kode OTP Salah!');
    }
}
