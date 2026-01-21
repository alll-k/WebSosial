@extends('layout.style')

@section('konten')

<style>
    /* 1. Slider & Hero Section HD */
    .slider-container {
        position: relative;
        width: 100%;
        height: 85vh;
        overflow: hidden;
        margin-top: -20px;
    }

    .slide {
        position: absolute;
        width: 100%;
        height: 100%;
        opacity: 0;
        transition: opacity 1s ease-in-out;
    }

    .current-slide { opacity: 1; }

    .slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .overlay {
        position: absolute;
        top: 0; left: 0;
        width: 100%; height: 100%;
        background: rgba(0, 0, 0, 0.45);
    }

    .slide-content {
        position: absolute;
        top: 50%; left: 10%;
        transform: translateY(-50%);
        color: white;
        max-width: 800px;
        z-index: 2;
    }

    .slide-content h1 {
        font-size: 3.5rem;
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 20px;
        text-shadow: 2px 2px 10px rgba(0,0,0,0.5);
    }

    /* 2. Expertise Section */
    .expertise-section { padding: 80px 20px; background: #fcfcfc; text-align: center; }
    .expertise-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        max-width: 1200px;
        margin: 40px auto;
    }

    .expertise-card {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        transition: 0.3s;
    }

    .expertise-card:hover { transform: translateY(-10px); }
    .expertise-card img { width: 100%; height: 220px; object-fit: cover; }
    .expertise-text { padding: 25px; text-align: left; }

    /* 3. Berita Terkini (Metode Scroll Josjis) */
    .layanan-berita {
        padding: 60px 0;
        background: #fff;
    }

    .scroll-container {
        display: flex;
        overflow-x: auto;
        gap: 25px;
        padding: 20px 40px;
        scroll-behavior: smooth;
        scrollbar-width: none; /* Hilangkan scrollbar Firefox */
    }

    .scroll-container::-webkit-scrollbar {
        display: none; /* Hilangkan scrollbar Chrome/Safari */
    }

    .kolom-berita {
        min-width: 320px;
        max-width: 320px;
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(0,0,0,0.07);
        transition: 0.3s;
        text-decoration: none;
        color: inherit;
        border: 1px solid #eee;
    }

    .kolom-berita:hover {
        transform: scale(1.03);
        box-shadow: 0 12px 35px rgba(38, 198, 218, 0.2);
        border-color: #26c6da;
    }

    .berita-img {
        width: 100%;
        height: 180px;
        object-fit: cover;
    }

    .berita-info {
        padding: 20px;
    }

    .berita-info h2 {
        font-size: 1.2rem;
        color: #0277bd;
        margin-bottom: 10px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .berita-info h3 {
        font-size: 0.9rem;
        color: #888;
        font-weight: normal;
    }

    /* 4. CTA & Mitra */
    .cta-banner {
        background: linear-gradient(135deg, #0288d1, #26c6da);
        padding: 80px 20px;
        margin: 50px 20px;
        border-radius: 30px;
        text-align: center;
        color: white;
    }

    .mitra-logos {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 40px;
        padding: 40px;
        filter: grayscale(100%);
        opacity: 0.5;
    }
</style>

{{-- Hero Slider --}}
<section class="slider-container">
    <div class="slider-wrapper">
        <div class="slide current-slide">
            <img src="https://images.unsplash.com/photo-1527137341203-b82736173004?auto=format&fit=crop&q=80&w=2000" alt="Kampanye">
            <div class="overlay"></div>
            <div class="slide-content">
                <h1>Mahalkan Rokok! Selamatkan 268.000 Nyawa</h1>
                <p>Ubah kebiasaan buruk menjadi investasi gizi keluarga untuk Indonesia bebas stunting.</p>
                <a href="#" class="cta-button" style="display:inline-block; padding: 14px 30px; background:#26c6da; color:white; border-radius:50px; text-decoration:none; font-weight:bold; margin-top:20px;">Lihat Selengkapnya</a>
            </div>
        </div>
    </div>
</section>

{{-- Expertise --}}
<section class="expertise-section">
    <h2 style="font-weight: 800; margin-bottom: 10px;">Apa Saja Yang Kami Lakukan?</h2>
    <div class="expertise-container">
        <div class="expertise-card">
            <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?auto=format&fit=crop&q=80&w=1000" alt="Program">
            <div class="expertise-text">
                <h3 style="color:#0288d1">Kegiatan Sosial</h3>
                <p>Meningkatkan kualitas hidup masyarakat melalui program pemberdayaan yang inklusif.</p>
            </div>
        </div>
        <div class="expertise-card">
            <img src="https://images.unsplash.com/photo-1505751172876-fa1923c5c528?auto=format&fit=crop&q=80&w=1000" alt="Kesehatan">
            <div class="expertise-text">
                <h3 style="color:#0288d1">Sistem Kesehatan</h3>
                <p>Mendukung transformasi layanan primer agar merata untuk seluruh lapisan masyarakat.</p>
            </div>
        </div>
        <div class="expertise-card">
            <img src="{{ asset('images/gambar_1.jpg') }}" alt="Kaji & Evaluasi">
            <div class="expertise-text">
                <h3 style="color:#0288d1">Kaji & Evaluasi</h3>
                <p>Analisis mendalam terhadap isu sosial demi solusi yang berkelanjutan dan tepat sasaran.</p>
            </div>
        </div>
    </div>
</section>

{{-- Berita (Metode Scroll Horizontal Josjis) --}}
<section class="layanan-berita">
    <h1 style="text-align: center; font-weight: 800; margin-bottom: 10px;">Berita Terkini</h1>
    <p style="text-align: center; color: #777; margin-bottom: 30px;">Geser ke samping untuk melihat berita lainnya</p>

    <div class="scroll-container">
        @php
            $defaultImages = [
                'gambar 2.jpg',
                'gambar 3.jpg',
                'gambar 4.jpg',
                'gambar_1.jpg',
                'ti.jpg'
            ];
        @endphp
        @foreach($beritas as $berita)
            @php
                $defaultImage = $defaultImages[$loop->index % count($defaultImages)];
            @endphp
            <a href="/berita/{{ $berita['slug'] }}" class="kolom-berita">
                {{-- Gambar berita josjis --}}
                <img src="{{ $berita['gambar'] ?? asset('images/' . $defaultImage) }}"
                     alt="{{ $berita['judul'] }}" class="berita-img">
                <div class="berita-info">
                    <h2>{{ $berita['judul'] }}</h2>
                    <h3>✍️ {{ $berita['penulis'] }}</h3>
                </div>
            </a>
        @endforeach
    </div>
</section>

{{-- CTA --}}
<section class="cta-banner">
    <h2 style="font-size: 2.8rem; font-weight: 800; margin-bottom: 15px;">Ayo Jadi Relawan!</h2>
    <p style="font-size: 1.1rem; max-width: 700px; margin: 0 auto 30px; opacity: 0.9;">Kehadiranmu adalah harapan bagi mereka. Bergabunglah sekarang dan jadilah bagian dari perubahan besar.</p>
    <a href="/profil" style="display: inline-block; background: white; color: #0288d1; padding: 15px 40px; font-size: 1.1rem; font-weight: bold; border-radius: 50px; text-decoration: none; transition: 0.3s;">Daftar Menjadi Relawan</a>
</section>

{{-- Mitra --}}
<section style="text-align: center; padding: 60px 20px;">
    <h2 style="color: #444; margin-bottom: 30px;">Mitra Strategis</h2>
    <div class="mitra-logos">
        <div class="mitra-logo-item"><img src="https://cisdi.org/wp-content/uploads/2021/08/Global-Fund.png" alt="Global Fund" style="height: 50px;"></div>
        <div class="mitra-logo-item"><img src="https://cisdi.org/wp-content/uploads/2021/08/Co-Impact.png" alt="Co-Impact" style="height: 50px;"></div>
        <div class="mitra-logo-item"><img src="https://cisdi.org/wp-content/uploads/2021/08/bloomberg-philantrophies.png" alt="Bloomberg" style="height: 50px;"></div>
        <div class="mitra-logo-item"><img src="https://cisdi.org/wp-content/uploads/2021/08/bill-melinda-gates.png" alt="Gates" style="height: 50px;"></div>
    </div>
</section>

@endsection
