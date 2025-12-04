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
    <h2 style="text-align: center;">Daftar Kegiatan</h2><br>

    <div class="cards">

        <div class="card">
            <h3>Bantuan Banjir Bandang di Sumatra</h3>
            <p>
                Tanggal: 12 Desember 2025 <br>
                Lokasi: Desa Mekarsari <br>
                Waktu: 08.00 – 12.00 WIB
            </p>
            <a href="https://wa.me/628xxx?text=Halo%20saya%20ingin%20ikut%20kegiatan%20Bantuan%20Banjir%20Bandang" class="btn-secondary">
                Daftar via WhatsApp
            </a>
        </div>

        <div class="card">
            <h3>Distribusi Logistik Korban Angin Puting Beliung</h3>
            <p>
                Tanggal: 15 Desember 2025 <br>
                Lokasi: Kecamatan Andir <br>
                Waktu: 09.00 – 13.00 WIB
            </p>
            <a href="https://wa.me/628xxx?text=Saya%20ingin%20ikut%20kegiatan%20Distribusi%20Logistik" class="btn-secondary">
                Daftar via WhatsApp
            </a>
        </div>

        <div class="card">
            <h3>Relawan Trauma Healing Untuk Anak-Anak</h3>
            <p>
                Tanggal: 20 Desember 2025 <br>
                Lokasi: Rumah Belajar Cibeunying <br>
                Waktu: 13.00 – 16.00 WIB
            </p>
            <a href="https://wa.me/628xxx?text=Saya%20tertarik%20menjadi%20relawan%20Trauma%20Healing" class="btn-secondary">
                Daftar via WhatsApp
            </a>
        </div>

    </div>
</section>

@endsection
