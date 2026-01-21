@extends('layout.style')

@section('konten')

<style>
    /* Mengatasi teks yang terlalu dekat dengan navigasi */
    .hero-revised {
        padding: 120px 20px 80px 20px; /* Padding atas ditambah agar tidak mepet nav */
        background: linear-gradient(135deg, #0288d1, #26c6da);
        text-align: center;
        color: white;
    }

    .hero-revised h1 {
        font-size: 3rem;
        font-weight: 800;
        margin-bottom: 15px;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
    }

    .hero-revised p {
        font-size: 1.2rem;
        max-width: 800px;
        margin: 0 auto;
        opacity: 0.9;
    }

    /* Styling Section Kegiatan */
    .kegiatan-section {
        padding: 60px 20px;
        background-color: #f8f9fa;
    }

    .section-title {
        text-align: center;
        font-size: 2.5rem;
        color: #333;
        margin-bottom: 50px;
        position: relative;
    }

    .section-title::after {
        content: '';
        display: block;
        width: 80px;
        height: 5px;
        background: #26c6da;
        margin: 15px auto 0;
        border-radius: 10px;
    }

    /* Grid Kartu */
    .grid-kegiatan {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 30px;
        max-width: 1200px;
        margin: 0 auto;
    }

    /* Kartu Baru */
    .card-kegiatan {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        border: none;
        display: flex;
        flex-direction: column;
    }

    .card-kegiatan:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(0,0,0,0.15);
    }

    .card-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
        background-color: #eee;
    }

    .card-body {
        padding: 25px;
        flex-grow: 1;
    }

    .card-body h3 {
        font-size: 1.4rem;
        color: #0277bd;
        margin-bottom: 15px;
        font-weight: 700;
        line-height: 1.3;
    }

    .info-item {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
        color: #555;
        font-size: 0.95rem;
    }

    .info-item span {
        margin-right: 12px;
        font-size: 1.2rem;
    }

    .btn-wa {
        display: block;
        text-align: center;
        background: #26c6da;
        color: white;
        text-decoration: none;
        padding: 12px;
        border-radius: 12px;
        font-weight: bold;
        margin-top: 20px;
        transition: background 0.3s;
    }

    .btn-wa:hover {
        background: #0288d1;
        color: white;
    }
</style>

<div class="hero-revised">
    <h1>Jadwal Kegiatan Sosial</h1>
    <p>
        Jadilah bagian dari perubahan! Pilih kegiatan yang sesuai dengan minatmu dan mari bantu sesama dengan penuh semangat.
    </p>
</div>

<section class="kegiatan-section">
    <h2 class="section-title">📅 Daftar Kegiatan Terdekat</h2>

    <div class="grid-kegiatan">

        <div class="card-kegiatan">
            <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?auto=format&fit=crop&q=80&w=500" alt="Bakti Sosial" class="card-image">
            <div class="card-body">
                <h3>Bakti Sosial Pembagian Sembako</h3>
                <div class="info-item"><span>📅</span> 12 Desember 2025</div>
                <div class="info-item"><span>⏰</span> 08.00 – 12.00 WIB</div>
                <div class="info-item"><span>📍</span> Desa Mekarsari</div>
                <a href="/pendaftaran-relawan?kegiatan=Bakti%20Sosial%20Pembagian%20Sembako&tanggal=12%20Desember%202025&jam=08:00%20-%2012:00&lokasi=Desa%20Mekarsari" class="btn-wa">
                    Daftar Sekarang
                </a>
            </div>
        </div>

        <div class="card-kegiatan">
            <img src="https://images.unsplash.com/photo-1584515933487-779824d29309?auto=format&fit=crop&q=80&w=500" alt="Kesehatan" class="card-image">
            <div class="card-body">
                <h3>Pemeriksaan Kesehatan Gratis</h3>
                <div class="info-item"><span>📅</span> 15 Desember 2025</div>
                <div class="info-item"><span>⏰</span> 09.00 – 13.00 WIB</div>
                <div class="info-item"><span>📍</span> Kecamatan Andir</div>
                <a href="/pendaftaran-relawan?kegiatan=Pemeriksaan%20Kesehatan%20Gratis&tanggal=15%20Desember%202025&jam=09:00%20-%2013:00&lokasi=Kecamatan%20Andir" class="btn-wa">
                    Daftar Sekarang
                </a>
            </div>
        </div>

        <div class="card-kegiatan">
            <img src="https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?auto=format&fit=crop&q=80&w=500" alt="Mengajar" class="card-image">
            <div class="card-body">
                <h3>Pengajaran Anak-anak (Trauma Healing)</h3>
                <div class="info-item"><span>📅</span> 20 Desember 2025</div>
                <div class="info-item"><span>⏰</span> 13.00 – 16.00 WIB</div>
                <div class="info-item"><span>📍</span> Rumah Belajar Cibeunying</div>
                <a href="/pendaftaran-relawan?kegiatan=Pengajaran%20Anak-anak%20(Trauma%20Healing)&tanggal=20%20Desember%202025&jam=13:00%20-%2016:00&lokasi=Rumah%20Belajar%20Cibeunying" class="btn-wa">
                    Daftar Sekarang
                </a>
            </div>
        </div>

    </div>
</section>

@endsection
