@extends('layout.style')

@section('konten')
<div class="hero-revised" style="padding: 100px 20px 40px 20px;">
    <div class="banner-content">
        <h1>Lengkapi Data Donasi</h1>
        <p>Berapapun bantuanmu sangat berarti bagi mereka yang membutuhkan.</p>
    </div>
</div>

<div class="container mt-n5" style="margin-top: -30px; position: relative; z-index: 10;">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card border-0 shadow-lg p-4" style="border-radius: 20px;">
                <form action="{{ route('donasi.submit') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nama Lengkap</label>
                        <input type="text" name="nama_donatur" class="form-control" placeholder="Hamba Allah" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="email@contoh.com" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nomor WhatsApp</label>
                        <input type="text" name="no_hp" class="form-control" placeholder="08xxxxxxxxxx" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Jumlah Donasi (Rp)</label>
                        {{-- Min diatur ke 1 agar bisa donasi berapapun --}}
                        <input type="number" name="jumlah_donasi" class="form-control" placeholder="Masukkan nominal (Contoh: 50000)" min="1" required>
                    </div>
                    <div class="mb-4">
                        <label class="form-label fw-bold">Pesan Kebaikan (Opsional)</label>
                        <textarea name="pesan_kebaikan" class="form-control" rows="2" placeholder="Tulis doa atau pesan semangat..."></textarea>
                    </div>
                    <button type="submit" class="btn-action w-100">Lanjut ke Pembayaran</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection