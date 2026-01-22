@extends('layout.style')

@section('konten')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
    :root {
        --primary: #0288d1;
        --secondary: #26c6da;
        --bg-soft: #f4f7f9;
        --text-main: #1e293b;
    }

    .auth-wrapper {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 100px 20px;
        background: radial-gradient(circle at top right, rgba(38, 198, 218, 0.05), transparent),
                    radial-gradient(circle at bottom left, rgba(2, 136, 209, 0.05), transparent);
    }

    .auth-container {
        width: 100%;
        max-width: 1000px;
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(10px);
        border-radius: 30px;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.8);
        overflow: hidden;
        display: flex;
        flex-wrap: wrap;
    }

    .auth-side {
        flex: 1;
        min-width: 320px;
        padding: 50px;
    }

    .auth-side.login-side {
        background: white;
    }

    .auth-side.register-side {
        background: #fafcfd;
        border-left: 1px solid #f1f5f9;
    }

    .auth-header h2 {
        font-weight: 800;
        letter-spacing: -1px;
        margin-bottom: 10px;
    }

    .input-group-custom {
        margin-bottom: 20px;
        position: relative;
    }

    .input-group-custom label {
        display: block;
        font-size: 0.75rem;
        font-weight: 700;
        color: #64748b;
        margin-bottom: 8px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .input-group-custom input {
        width: 100%;
        padding: 14px 16px;
        border: 2px solid #f1f5f9;
        border-radius: 12px;
        font-size: 0.95rem;
        transition: all 0.3s ease;
        background: white;
    }

    .input-group-custom input:focus {
        outline: none;
        border-color: var(--primary);
        box-shadow: 0 0 0 4px rgba(2, 136, 209, 0.1);
    }

    .btn-auth {
        width: 100%;
        padding: 16px;
        border: none;
        border-radius: 15px;
        font-weight: 700;
        font-size: 1rem;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    .btn-login {
        background: linear-gradient(135deg, #0288d1, #0277bd);
        color: white;
        box-shadow: 0 10px 20px rgba(2, 136, 209, 0.2);
    }

    .btn-register {
        background: linear-gradient(135deg, #26c6da, #00acc1);
        color: white;
        box-shadow: 0 10px 20px rgba(38, 198, 218, 0.2);
    }

    .btn-auth:hover {
        transform: translateY(-2px);
        filter: brightness(1.1);
    }

    .back-nav {
        position: fixed;
        top: 30px;
        left: 30px;
        z-index: 100;
    }

    .btn-back {
        text-decoration: none;
        color: var(--text-main);
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 12px 20px;
        background: white;
        border-radius: 50px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        transition: 0.3s;
    }

    .btn-back:hover { background: #f8fafc; transform: translateX(-5px); }

    .alert-custom {
        padding: 15px;
        border-radius: 12px;
        margin-bottom: 25px;
        font-size: 0.85rem;
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .alert-error { background: #fff1f2; color: #e11d48; border: 1px solid #fecdd3; }
    .alert-success { background: #f0fdf4; color: #16a34a; border: 1px solid #bbf7d0; }

    @media (max-width: 768px) {
        .auth-side { padding: 30px; }
        .auth-container { border-radius: 20px; }
    }
</style>

<div class="auth-wrapper">
    <div class="back-nav">
        <a href="{{ url('/') }}" class="btn-back">
            <i class="fas fa-arrow-left"></i> Kembali ke Beranda
        </a>
    </div>

    <div class="auth-container animate__animated animate__zoomIn">
        
        {{-- BAGIAN LOGIN --}}
        <div class="auth-side login-side">
            <div class="auth-header">
                <h2 style="color: var(--primary);">Selamat Datang</h2>
                <p class="text-muted small mb-4">Masuk ke sistem relawan terintegrasi.</p>
            </div>

            @if($errors->any())
                <div class="alert-custom alert-error">
                    <i class="fas fa-exclamation-circle"></i>
                    {{ $errors->first() }}
                </div>
            @endif

            @if(session('success'))
                <div class="alert-custom alert-success">
                    <i class="fas fa-check-circle"></i>
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('login.post') }}" method="POST">
                @csrf
                <div class="input-group-custom">
                    <label>Alamat Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="nama@email.com" required>
                </div>
                <div class="input-group-custom">
                    <label>Kata Sandi</label>
                    <input type="password" name="password" placeholder="••••••••" required>
                </div>
                
                <div class="mb-4 text-end">
                    <a href="#" class="text-decoration-none small fw-bold" style="color: var(--primary);">Lupa Password?</a>
                </div>

                <button type="submit" class="btn-auth btn-login">
                    MASUK SEKARANG <i class="fas fa-sign-in-alt"></i>
                </button>
            </form>
        </div>

        {{-- BAGIAN REGISTER --}}
        <div class="auth-side register-side">
            <div class="auth-header">
                <h2 style="color: var(--secondary);">Registrasi</h2>
                <p class="text-muted small mb-4">Bergabung dengan ekosistem kebaikan.</p>
            </div>

            <form action="{{ route('register.post') }}" method="POST">
                @csrf
                <div class="input-group-custom">
                    <label>Nama Lengkap</label>
                    <input type="text" name="name" placeholder="Nama sesuai identitas" required>
                </div>
                <div class="input-group-custom">
                    <label>Email Aktif</label>
                    <input type="email" name="email" placeholder="email@relawan.id" required>
                </div>
                <div class="row g-2">
                    <div class="col-6">
                        <div class="input-group-custom">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Min 8 Karakter" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input-group-custom">
                            <label>Konfirmasi</label>
                            <input type="password" name="password_confirmation" placeholder="Ulangi" required>
                        </div>
                    </div>
                </div>

                <div class="small text-muted mb-4" style="line-height: 1.4;">
                    Dengan mendaftar, Anda menyetujui <span class="fw-bold text-dark">Syarat & Ketentuan</span> yang berlaku.
                </div>

                <button type="submit" class="btn-auth btn-register">
                    BUAT AKUN <i class="fas fa-user-plus"></i>
                </button>
            </form>
        </div>

    </div>
</div>
@endsection