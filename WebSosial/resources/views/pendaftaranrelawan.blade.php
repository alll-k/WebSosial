@extends('layout.style')

@section('konten')

<div class="container my-5">

    <!-- Judul -->
    <div class="text-center mb-5">
        <h2 class="fw-bold">Form Pendaftaran Relawan</h2>
        <p class="text-muted">
            Silakan isi data diri dengan lengkap dan benar untuk bergabung menjadi relawan.
        </p>
    </div>

    <!-- Info Kegiatan Terpilih -->
    @if(request()->has('kegiatan'))
        <div style="background: linear-gradient(135deg, #e3f2fd, #f3e5f5); border-left: 5px solid #0288d1; padding: 20px; border-radius: 10px; margin-bottom: 30px;">
            <h5 style="color: #0288d1; margin: 0 0 15px 0;">📋 Kegiatan yang Anda Daftar:</h5>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px;">
                <div style="background: white; padding: 12px; border-radius: 6px;">
                    <strong style="color: #0277bd;">🎯 Kegiatan:</strong><br>
                    <span style="color: #555; font-size: 0.95rem;">{{ request()->get('kegiatan') }}</span>
                </div>
                <div style="background: white; padding: 12px; border-radius: 6px;">
                    <strong style="color: #0277bd;">📅 Tanggal:</strong><br>
                    <span style="color: #555; font-size: 0.95rem;">{{ request()->get('tanggal') }}</span>
                </div>
                <div style="background: white; padding: 12px; border-radius: 6px;">
                    <strong style="color: #0277bd;">⏰ Jam:</strong><br>
                    <span style="color: #555; font-size: 0.95rem;">{{ request()->get('jam') }}</span>
                </div>
                <div style="background: white; padding: 12px; border-radius: 6px;">
                    <strong style="color: #0277bd;">📍 Lokasi:</strong><br>
                    <span style="color: #555; font-size: 0.95rem;">{{ request()->get('lokasi') }}</span>
                </div>
            </div>
        </div>
    @endif

    <!-- FORM -->
    <form action="{{ url('/pendaftaran-relawan/simpan') }}" method="POST">
        @csrf

        <!-- Hidden Input untuk Kegiatan -->
        @if(request()->has('kegiatan'))
            <input type="hidden" name="kegiatan" value="{{ request()->get('kegiatan') }}">
            <input type="hidden" name="tanggal_kegiatan" value="{{ request()->get('tanggal') }}">
            <input type="hidden" name="jam_kegiatan" value="{{ request()->get('jam') }}">
            <input type="hidden" name="lokasi_kegiatan" value="{{ request()->get('lokasi') }}">
        @endif

        <!-- Data Pribadi -->
        <h5 class="mb-3">Data Diri</h5>

        <div class="mb-3">
            <label class="form-label">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Panggilan</label>
            <input type="text" name="nama_panggilan" class="form-control">
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" required>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control" required>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat Domisili</label>
            <textarea name="alamat" class="form-control" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Nomor WhatsApp Aktif</label>
            <input type="text" name="no_wa" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Asal Instansi / Pekerjaan</label>
            <input type="text" name="instansi" class="form-control">
        </div>

        <!-- Motivasi -->
        <h5 class="mt-5 mb-3">Informasi Relawan</h5>

        <div class="mb-3">
            <label class="form-label">Minat / Keahlian</label>
            <input type="text" name="keahlian" class="form-control" placeholder="Contoh: Pendidikan, Kesehatan, Dokumentasi">
        </div>

        <div class="mb-3">
            <label class="form-label">Alasan Bergabung Menjadi Relawan</label>
            <textarea name="alasan" class="form-control" rows="4" required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Pengalaman Organisasi (Opsional)</label>
            <textarea name="pengalaman" class="form-control" rows="3"></textarea>
        </div>

        <!-- Pernyataan -->
        <div class="form-check mb-4">
            <input class="form-check-input" type="checkbox" required>
            <label class="form-check-label">
                Saya menyatakan bahwa data yang saya isi adalah benar dan bersedia mengikuti
                seluruh aturan serta kegiatan relawan.
            </label>
        </div>

        <!-- Tombol -->
        <div class="text-center">
            <button type="submit" class="btn btn-success btn-lg">
                Kirim Pendaftaran
            </button>
        </div>

    </form>

</div>

@endsection
