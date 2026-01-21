@extends('layout.style')

@section('konten')

<style>
    /* Format Font dan Warna Seragam */
    .hero-revised {
        padding: 120px 20px 80px 20px; /* Jarak aman dari navigasi */
        background: linear-gradient(135deg, #0288d1, #26c6da);
        text-align: center;
        color: white;
        position: relative;
        overflow: hidden;
    }

    .hero-revised img {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        object-fit: cover;
        opacity: 0.2; /* Gambar banner dibuat samar agar teks terbaca */
        z-index: 0;
    }

    .hero-revised .banner-content {
        position: relative;
        z-index: 1;
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

    /* Section Layanan / Program */
    .program-section {
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

    /* Grid System yang sama dengan Laman Jadwal */
    .grid-program {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 30px;
        max-width: 1000px;
        margin: 0 auto;
    }

    /* Kartu Modern */
    .card-program {
        background: white;
        border-radius: 20px;
        padding: 40px 30px;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        border: none;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .card-program:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(0,0,0,0.15);
    }

    .card-program h3 {
        font-size: 1.6rem;
        color: #0277bd;
        margin-bottom: 15px;
        font-weight: 700;
    }

    .card-program p {
        color: #666;
        line-height: 1.6;
        margin-bottom: 25px;
        font-size: 1rem;
    }

    /* Tombol Konsisten dengan Laman Jadwal */
    .btn-action {
        display: inline-block;
        background: #26c6da;
        color: white;
        text-decoration: none;
        padding: 12px 25px;
        border-radius: 50px;
        font-weight: bold;
        transition: all 0.3s;
        border: none;
        cursor: pointer;
    }

    .btn-action:hover {
        background: #0288d1;
        color: white;
        box-shadow: 0 5px 15px rgba(2, 136, 209, 0.3);
    }
</style>

{{-- Banner Hero --}}
<div class="hero-revised">
    <img src="{{ asset('images/gambar 4.jpg') }}" alt="Banner Kegiatan">
    <div class="banner-content">
        <h1>Program & Kegiatan Sosial Kami</h1>
        <p>Lihat berbagai inisiatif nyata yang kami lakukan untuk membawa perubahan positif bagi masyarakat.</p>
    </div>
</div>

{{-- Section Kartu Program --}}
<section class="program-section">
    <h2 class="section-title">Fasilitas Kami</h2>

    <div class="grid-program">
        <div class="card-program">
            <div>
                <span style="font-size: 3rem; display: block; margin-bottom: 15px;">📅</span>
                <h3>Join Relawan</h3>
                <p>
                   Punya waktu dan ingin berbagi dampak baik? Yuk join jadi relawan dan tumbuh bersama kami di berbagai kegiatan bermakna.
                </p>
            </div>
            <a href="{{ url('/jadwal') }}" class="btn-action">Klik Disini!!!</a>
        </div>

        <div class="card-program">
            <div>
                <span style="font-size: 3rem; display: block; margin-bottom: 15px;">🚀</span>
                <h3>Tertarik Berdonasi?</h3>
                <p>
                    Mari ambil bagian dalam upaya membangun kemandirian masyarakat. Donasi Anda mendukung program-program berkelanjutan yang memberi perubahan nyata.
                </p>
            </div>
            <a href="{{ url('/program') }}" class="btn-action">Klik Disini!!!</a>
        </div>
    </div>
</section>

@endsection