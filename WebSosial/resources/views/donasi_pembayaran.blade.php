@extends('layout.style')

@section('konten')
<div class="container py-5 text-center mt-5">
    <div class="card border-0 shadow mx-auto p-5" style="max-width: 600px; border-radius: 20px;">
        <h3 class="fw-bold">Instruksi Pembayaran</h3>
        <p class="text-muted">ID Transaksi: <strong>{{ $kode }}</strong></p>
        <hr>
        <p>Silakan transfer tepat sesuai nominal berikut:</p>
        <h1 class="display-5 fw-bold text-primary">Rp {{ number_format($nominal, 0, ',', '.') }}</h1>
        
        <div class="bg-light p-3 rounded mb-4 mt-4">
            <p class="mb-1"><strong>Bank Syariah Indonesia (BSI)</strong></p>
            <h4 class="fw-bold">7123456789</h4>
            <p class="small text-muted">A/N Yayasan Relawan Plus</p>
        </div>

        <p class="small">Setelah transfer, mohon konfirmasi melalui WhatsApp agar status donasi Anda berubah menjadi <strong>BERHASIL</strong> di dashboard kami.</p>
        <a href="https://wa.me/628123456789?text=Konfirmasi%20Donasi%20{{ $kode }}" class="btn-action">Konfirmasi Lewat WA</a>
    </div>
</div>
@endsection