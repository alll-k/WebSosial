@extends('layout.style')

@section('konten')
{{-- Latar belakang transparan agar mengikuti background utama dari layout --}}
<div style="min-height: 100vh; display: flex; flex-direction: column; align-items: center; justify-content: center; background: transparent; padding: 80px 20px;">

    <div style="width: 100%; max-width: 900px; margin-bottom: 20px;">
        <a href="{{ url('/') }}" style="text-decoration: none; color: #333; display: inline-flex; align-items: center; gap: 8px; font-weight: bold; background: rgba(0,0,0,0.05); padding: 10px 20px; border-radius: 50px; transition: 0.3s;"
           onmouseover="this.style.background='rgba(0,0,0,0.1)'"
           onmouseout="this.style.background='rgba(0,0,0,0.05)'">
            <span style="font-size: 18px;">←</span> Kembali ke Beranda
        </a>
    </div>

    <div style="background: white; padding: 40px; border-radius: 20px; box-shadow: 0 10px 25px rgba(0,0,0,0.1); width: 100%; max-width: 900px; display: flex; flex-wrap: wrap; gap: 40px; position: relative; border: 1px solid #eee;">

        <div style="flex: 1; min-width: 300px;">
            <h2 style="color: #0277bd; font-weight: 800; margin-bottom: 20px;">MASUK</h2>

            {{-- Pesan Error: Muncul jika login gagal atau CSRF expired --}}
            @if($errors->any())
                <div style="background: #ffebee; color: #c62828; padding: 12px; border-radius: 8px; margin-bottom: 20px; font-size: 14px; border-left: 4px solid #c62828;">
                    {{ $errors->first() }}
                </div>
            @endif

            {{-- Pesan Sukses: Muncul setelah berhasil registrasi --}}
            @if(session('success'))
                <div style="background: #e8f5e9; color: #2e7d32; padding: 12px; border-radius: 8px; margin-bottom: 20px; font-size: 14px; border-left: 4px solid #2e7d32;">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('login.post') }}" method="POST">
                @csrf
                <div style="margin-bottom: 15px;">
                    <label style="display:block; font-size:12px; color:#666; margin-bottom:5px; font-weight:600;">EMAIL</label>
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Contoh: admin@relawan.id" required style="width: 100%; padding: 12px; border: 2px solid #f0f0f0; border-radius: 10px; outline: none; transition: 0.3s;" onfocus="this.style.borderColor='#0288d1'">
                </div>
                <div style="margin-bottom: 15px;">
                    <label style="display:block; font-size:12px; color:#666; margin-bottom:5px; font-weight:600;">PASSWORD</label>
                    <input type="password" name="password" placeholder="Masukkan password" required style="width: 100%; padding: 12px; border: 2px solid #f0f0f0; border-radius: 10px; outline: none; transition: 0.3s;" onfocus="this.style.borderColor='#0288d1'">
                </div>
                <button type="submit" style="width: 100%; padding: 14px; background: #0288d1; color: white; border: none; border-radius: 50px; font-weight: bold; cursor: pointer; transition: 0.3s; box-shadow: 0 4px 10px rgba(2, 136, 209, 0.2);">
                    MASUK SEKARANG
                </button>
            </form>
        </div>

        <div style="width: 1px; background: #eee;"></div>

        <div style="flex: 1; min-width: 300px;">
            <h2 style="color: #26c6da; font-weight: 800; margin-bottom: 20px;">DAFTAR RELAWAN</h2>
            <form action="{{ route('register.post') }}" method="POST">
                @csrf
                <div style="margin-bottom: 15px;">
                    <input type="text" name="name" placeholder="Nama Lengkap" required style="width: 100%; padding: 12px; border: 2px solid #f0f0f0; border-radius: 10px; outline: none; transition: 0.3s;" onfocus="this.style.borderColor='#26c6da'">
                </div>
                <div style="margin-bottom: 15px;">
                    <input type="email" name="email" placeholder="Email Baru" required style="width: 100%; padding: 12px; border: 2px solid #f0f0f0; border-radius: 10px; outline: none; transition: 0.3s;" onfocus="this.style.borderColor='#26c6da'">
                </div>
                <div style="margin-bottom: 15px;">
                    <input type="password" name="password" placeholder="Password (Min 8 Karakter)" required style="width: 100%; padding: 12px; border: 2px solid #f0f0f0; border-radius: 10px; outline: none; transition: 0.3s;" onfocus="this.style.borderColor='#26c6da'">
                </div>
                <div style="margin-bottom: 15px;">
                    <input type="password" name="password_confirmation" placeholder="Ulangi Password" required style="width: 100%; padding: 12px; border: 2px solid #f0f0f0; border-radius: 10px; outline: none; transition: 0.3s;" onfocus="this.style.borderColor='#26c6da'">
                </div>
                <button type="submit" style="width: 100%; padding: 14px; background: #26c6da; color: white; border: none; border-radius: 50px; font-weight: bold; cursor: pointer; transition: 0.3s; box-shadow: 0 4px 10px rgba(38, 198, 218, 0.2);">
                    DAFTAR SEKARANG
                </button>
            </form>
        </div>

    </div>
</div>
@endsection
