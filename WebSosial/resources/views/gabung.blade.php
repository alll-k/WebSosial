@extends('layout.style')

@section('konten')

<div class="container my-5">

    <!-- Judul -->
    <div class="text-center mb-5">
        <h2 class="fw-bold">Gabung Menjadi Relawan</h2>
        <p class="text-muted">
            Bersama kita wujudkan aksi nyata dan kepedulian untuk Indonesia.
        </p>
    </div>

    <!-- SEBELUM BERGABUNG -->
    <div class="mb-5">
        <h4 class="fw-semibold mb-3">Hal yang Perlu Dilakukan Sebelum Bergabung</h4>
        <ul>
            <li>Memahami tujuan dan nilai kegiatan relawan yang akan diikuti.</li>
            <li>Memastikan kesediaan waktu dan komitmen selama kegiatan berlangsung.</li>
            <li>Menyiapkan data diri dan kontak yang aktif.</li>
            <li>Menentukan minat dan kemampuan yang dapat dikontribusikan.</li>
        </ul>
    </div>

    <!-- SETELAH BERGABUNG -->
    <div class="mb-5">
        <h4 class="fw-semibold mb-3">Hal yang Akan Dilakukan Setelah Bergabung</h4>
        <ul>
            <li>Mengikuti proses verifikasi dan konfirmasi dari tim relawan.</li>
            <li>Mendapatkan informasi terkait jadwal, lokasi, dan pembagian tugas.</li>
            <li>Mengikuti pembekalan atau pengarahan sebelum kegiatan dimulai.</li>
            <li>Berpartisipasi aktif dalam pelaksanaan kegiatan sosial.</li>
            <li>Menjaga etika, tanggung jawab, dan kerja sama selama kegiatan.</li>
        </ul>
    </div>

    <!-- LINK PENDAFTARAN -->
    <div class="text-center mb-5">
        <a href="{{ url('/profil') }}" class="btn btn-primary btn-lg">
            📝 Isi Form Pendaftaran Relawan
        </a>
    </div>

    <!-- DATA DIRI -->
    <div class="mx-auto" style="max-width: 800px;">
        <h4 class="fw-semibold mb-3">Data Diri yang Perlu Diisi</h4>
        <p>
            Untuk bergabung menjadi relawan, silakan mengisi formulir pendaftaran
            dengan data berikut:
        </p>

        <ul>
            <li>Nama Lengkap</li>
            <li>Umur</li>
            <li>Alamat Domisili</li>
            <li>Nomor WhatsApp Aktif</li>
            <li>Alamat Email</li>
            <li>Asal Instansi / Pekerjaan</li>
            <li>Minat dan Keahlian</li>
            <li>Alasan Bergabung Menjadi Relawan</li>
            <li>Pengalaman Organisasi (jika ada)</li>
        </ul>

        <p class="text-muted mt-3">
            Pastikan seluruh data yang diisi adalah benar dan dapat dipertanggungjawabkan.
            Tim kami akan menghubungi relawan yang memenuhi kriteria melalui kontak yang telah diberikan.
        </p>
    </div>

</div>

@endsection
