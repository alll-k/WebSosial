@extends('layout.style')

@section('konten')
<div class="container my-5 text-center">

    {{-- JIKA SUDAH BERHASIL --}}
    @if(session('success'))
        <div class="card shadow-sm p-4 mx-auto" style="max-width: 450px;">
            <h3 class="fw-bold text-success">✅ Pendaftaran Berhasil</h3>
            <p class="text-muted mt-3">
                Terima kasih telah mendaftar sebagai relawan.
                Aktivitas ini sudah tercatat di akun Anda.
            </p>

            <a href="/aktivitas-saya" class="btn btn-success w-100 btn-lg mt-3">
                Lihat Aktivitas Saya
            </a>
        </div>

    {{-- JIKA BELUM --}}
    @else
        <div class="card shadow-sm p-4 mx-auto" style="max-width: 400px;">
            <h3 class="fw-bold">Verifikasi Email</h3>
            <p class="text-muted">
                Kami telah mengirimkan kode OTP ke email Anda.
                Silakan masukkan di bawah ini:
            </p>

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('relawan.simpan') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <input
                        type="text"
                        name="otp"
                        class="form-control form-control-lg text-center"
                        placeholder="000000"
                        maxlength="6"
                        required
                        autofocus
                    >
                </div>

                <button type="submit" class="btn btn-primary w-100 btn-lg">
                    Verifikasi & Daftar
                </button>
            </form>
        </div>
    @endif

</div>
@endsection
