<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller {

    /**
     * Menangani proses login user dan admin.
     */
    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Logika Pembeda Role: 1 untuk Admin, 0 untuk User/Relawan
            if (Auth::user()->role == 1) {
                // Dipaksa (Explicit) ke dashboard admin tanpa 'intended' agar tidak balik ke home
                return redirect('/admin/dashboard');
            }

            // Untuk user biasa, silakan gunakan intended atau redirect ke home
            return redirect()->intended('/home');
        }

        // Jika gagal, kembali dengan pesan error
        return back()->withErrors([
            'email' => 'Email atau Password yang Anda masukkan salah!',
        ])->withInput();
    }

    /**
     * Menangani pendaftaran relawan baru.
     */
    public function register(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 0, // Otomatis menjadi relawan biasa
        ]);

        return redirect('/login')->with('success', 'Akun berhasil dibuat! Silakan login untuk melanjutkan.');
    }

    /**
     * Fitur Keamanan: Memperbarui password Admin.
     */
    public function updatePassword(Request $request) {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        $user = Auth::user();

        // Validasi apakah password lama sesuai
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Password lama tidak sesuai dengan data kami.']);
        }

        // Update password baru
        $user->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with('success', 'Password keamanan berhasil diperbarui!');
    }

    /**
     * Menangani proses logout dan membersihkan sesi.
     */
    public function logout(Request $request) {
        Auth::logout();

        // Membersihkan sesi agar benar-benar keluar
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
