@extends('layout.style')

@section('konten')
<div style="min-height: 100vh; background-color: #f4f7f6; padding-top: 100px; padding-bottom: 50px;">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        
        <div style="background: white; padding: 30px; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); margin-bottom: 30px; display: flex; justify-content: space-between; align-items: center;">
            <div>
                <h1 style="color: #0277bd; margin: 0; font-weight: 700; font-size: 24px;">Panel Kendali Admin</h1>
                <p style="color: #666; margin: 5px 0 0;">Halo, <strong>{{ Auth::user()->name }}</strong>. Selamat bekerja untuk relawan.id</p>
            </div>
            <div style="text-align: right;">
                <span style="background: #e1f5fe; color: #0288d1; padding: 8px 20px; border-radius: 50px; font-weight: bold; font-size: 12px; border: 1px solid #0288d1;">ADMIN UTAMA</span>
            </div>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 25px;">
            
            <div style="background: white; padding: 30px; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 20px;">
                    <span style="font-size: 24px;">🔐</span>
                    <h3 style="color: #333; margin: 0;">Keamanan Akun Admin</h3>
                </div>
                
                @if(session('success'))
                    <div style="background: #e8f5e9; color: #2e7d32; padding: 12px; border-radius: 8px; margin-bottom: 20px; font-size: 14px; border-left: 5px solid #2e7d32;">
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div style="background: #ffebee; color: #c62828; padding: 12px; border-radius: 8px; margin-bottom: 20px; font-size: 14px;">
                        {{ $errors->first() }}
                    </div>
                @endif

                <form action="{{ route('password.update') }}" method="POST">
                    @csrf
                    <div style="margin-bottom: 15px;">
                        <label style="display: block; font-size: 14px; font-weight: 600; margin-bottom: 8px; color: #555;">Password Saat Ini</label>
                        <input type="password" name="current_password" required placeholder="Masukkan password lama" style="width: 100%; padding: 12px; border: 2px solid #f0f0f0; border-radius: 10px; outline: none; transition: 0.3s;" onfocus="this.style.borderColor='#0288d1'">
                    </div>
                    
                    <div style="margin-bottom: 15px;">
                        <label style="display: block; font-size: 14px; font-weight: 600; margin-bottom: 8px; color: #555;">Password Baru</label>
                        <input type="password" name="new_password" required placeholder="Minimal 8 karakter" style="width: 100%; padding: 12px; border: 2px solid #f0f0f0; border-radius: 10px; outline: none; transition: 0.3s;" onfocus="this.style.borderColor='#0288d1'">
                    </div>

                    <div style="margin-bottom: 25px;">
                        <label style="display: block; font-size: 14px; font-weight: 600; margin-bottom: 8px; color: #555;">Konfirmasi Password Baru</label>
                        <input type="password" name="new_password_confirmation" required placeholder="Ulangi password baru" style="width: 100%; padding: 12px; border: 2px solid #f0f0f0; border-radius: 10px; outline: none; transition: 0.3s;" onfocus="this.style.borderColor='#0288d1'">
                    </div>

                    <button type="submit" style="width: 100%; background: #0288d1; color: white; padding: 14px; border: none; border-radius: 50px; font-weight: bold; cursor: pointer; transition: 0.3s; box-shadow: 0 4px 10px rgba(2, 136, 209, 0.3);">
                        PERBARUI PASSWORD ADMIN
                    </button>
                </form>
            </div>

            <div style="background: white; padding: 30px; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); text-align: center; display: flex; flex-direction: column; justify-content: center;">
                <div style="font-size: 50px; margin-bottom: 20px;">🛡️</div>
                <h3 style="color: #333; margin-bottom: 15px;">Sistem Terlindungi</h3>
                <p style="color: #777; line-height: 1.6;">
                    Akun Admin Anda bersifat tunggal. Pastikan untuk mengganti password secara berkala untuk mencegah akses yang tidak diinginkan. 
                </p>
                <hr style="margin: 20px 0; border: 0; border-top: 1px solid #eee;">
                <p style="font-size: 13px; color: #999;">IP Terdeteksi: {{ request()->ip() }}</p>
            </div>

        </div>
    </div>
</div>
@endsection