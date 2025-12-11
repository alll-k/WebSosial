@extends('layout.style')

@section('konten')

<div class="hero">
    <div class="hero-text">
        <h1>Jadwal Kegiatan Sosial</h1>
        <p>
            Berikut adalah jadwal kegiatan sosial terdekat yang dapat kamu ikuti sebagai relawan.
            Yuk bergabung dan jadi bagian dari perubahan!
        </p>
    </div>
</div>

<section class="layanan" style="margin-top: 40px;">
    <h2 style="text-align: center; font-size: 2rem; margin-bottom: 30px;">📅 Daftar Kegiatan</h2>

    <div class="cards">

        <div class="card">
            <h3>Bantuan Banjir Bandang di Sumatra</h3>
        <div class="card" style="border-left: 5px solid #ff6b6b; transition: transform 0.3s ease;">
            <div style="display: flex; align-items: center; margin-bottom: 10px;">
                <span style="font-size: 2rem; margin-right: 10px;">🎁</span>
                <h3 style="margin: 0;">Bakti Sosial Pembagian Sembako</h3>
            </div>
            <p>
                <strong>📅 Tanggal:</strong> 12 Desember 2025 <br>
                <strong>⏰ Waktu:</strong> 08.00 – 12.00 WIB <br>
                <strong>📍 Lokasi:</strong> Desa Mekarsari
            </p>

            <a href="https://wa.me/628xxx?text=Halo%20saya%20ingin%20ikut%20kegiatan%20Bantuan%20Banjir%20Bandang" class="btn-secondary">
            <a href="https://wa.me/628xxx?text=Halo%20saya%20ingin%20ikut%20kegiatan%20Baksos" class="btn-secondary" style="display: inline-block; margin-top: 10px;">
                Daftar via WhatsApp
            </a>
        </div>

        <div class="card">
            <h3>Distribusi Logistik Korban Angin Puting Beliung</h3>
        <div class="card" style="border-left: 5px solid #4ecdc4; transition: transform 0.3s ease;">
            <div style="display: flex; align-items: center; margin-bottom: 10px;">
                <span style="font-size: 2rem; margin-right: 10px;">🏥</span>
                <h3 style="margin: 0;">Pemeriksaan Kesehatan Gratis</h3>
            </div>
            <p>
                <strong>📅 Tanggal:</strong> 15 Desember 2025 <br>
                <strong>⏰ Waktu:</strong> 09.00 – 13.00 WIB <br>
                <strong>📍 Lokasi:</strong> Kecamatan Andir
            </p>
            <a href="https://wa.me/628xxx?text=Saya%20ingin%20ikut%20kegiatan%20Distribusi%20Logistik" class="btn-secondary">

            <a href="https://wa.me/628xxx?text=Saya%20ingin%20ikut%20kegiatan%20Pemeriksaan%20Kesehatan" class="btn-secondary" style="display: inline-block; margin-top: 10px;">
                Daftar via WhatsApp
            </a>
        </div>

        <div class="card">
            <h3>Relawan Trauma Healing Untuk Anak-Anak</h3>

        <div class="card" style="border-left: 5px solid #95e1d3; transition: transform 0.3s ease;">
            <div style="display: flex; align-items: center; margin-bottom: 10px;">
                <span style="font-size: 2rem; margin-right: 10px;">📚</span>
                <h3 style="margin: 0;">Pengajaran Anak-anak</h3>
            </div>
            <p>
                <strong>📅 Tanggal:</strong> 20 Desember 2025 <br>
                <strong>⏰ Waktu:</strong> 13.00 – 16.00 WIB <br>
                <strong>📍 Lokasi:</strong> Rumah Belajar Cibeunying
            </p>
            <a href="https://wa.me/628xxx?text=Saya%20tertarik%20menjadi%20relawan%20Trauma%20Healing" class="btn-secondary">

            <a href="https://wa.me/628xxx?text=Saya%20tertarik%20mengajar%20anak-anak" class="btn-secondary" style="display: inline-block; margin-top: 10px;">
                Daftar via WhatsApp
            </a>
        </div>

    </div>
</section>

@endsection
