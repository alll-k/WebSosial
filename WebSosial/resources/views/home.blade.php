@extends('layout.style')

@section('konten')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<style>
    :root {
        --brand-blue: #0288d1;
        --brand-cyan: #26c6da;
        --soft-bg: #f8fafc;
        --text-dark: #1e293b;
        --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
        color: var(--text-dark);
        overflow-x: hidden;
        background-color: #fff;
    }

    /* 1. Hero Section - Deep Correlation Visual */
    .slider-container {
        position: relative;
        width: 100%;
        height: 90vh;
        min-height: 600px;
        overflow: hidden;
        background: #000;
    }

    .slide {
        position: absolute;
        inset: 0;
        /* Gambar Anak Indonesia: Fokus pada masa depan yang ingin diselamatkan */
        background: url('https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?q=80&w=2000') center/cover no-repeat;
        transform: scale(1.05);
        animation: subtleZoom 20s infinite alternate;
    }

    @keyframes subtleZoom {
        from { transform: scale(1); }
        to { transform: scale(1.1); }
    }

    /* Overlay lebih gelap di sisi kiri agar teks putih tajam */
    .overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to right, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.4) 50%, rgba(0,0,0,0.1) 100%);
    }

    .slide-content {
        position: absolute;
        top: 50%; left: 8%;
        transform: translateY(-50%);
        color: white;
        max-width: 750px;
        z-index: 2;
    }

    .btn-action {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        padding: 18px 35px;
        background: var(--brand-cyan);
        color: white;
        border-radius: 100px;
        text-decoration: none;
        font-weight: 700;
        transition: var(--transition);
        box-shadow: 0 10px 20px rgba(38, 198, 218, 0.3);
    }

    .btn-action:hover {
        transform: translateY(-3px);
        background: #1eb1c4;
        color: white;
        box-shadow: 0 15px 30px rgba(38, 198, 218, 0.5);
    }

    /* 2. Expertise Section */
    .expertise-section { padding: 100px 0; background: var(--soft-bg); }

    .expertise-card {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        height: 100%;
        transition: var(--transition);
        border: 1px solid rgba(0,0,0,0.05);
    }

    .expertise-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.08);
    }

    /* 3. News Horizontal Scroll Styling */
    .scroll-container {
        display: flex;
        overflow-x: auto;
        gap: 25px;
        padding: 20px 0 40px;
        scrollbar-width: thin;
        scrollbar-color: var(--brand-cyan) transparent;
    }

    .scroll-container::-webkit-scrollbar { height: 6px; }
    .scroll-container::-webkit-scrollbar-thumb { background: var(--brand-cyan); border-radius: 10px; }

    .kolom-berita {
        min-width: 320px;
        flex: 0 0 auto;
        background: white;
        border-radius: 15px;
        text-decoration: none;
        color: inherit;
        border: 1px solid #eee;
        transition: var(--transition);
    }

    /* 4. Mitra Strategis */
    .mitra-item img {
        height: 70px;
        filter: grayscale(20%);
        transition: var(--transition);
        opacity: 0.8;
    }

    .mitra-item:hover img {
        filter: grayscale(0%);
        opacity: 1;
        transform: scale(1.05);
    }
</style>

{{-- Hero Section --}}
<section class="slider-container">
    <div class="slide"></div>
    <div class="overlay"></div>
    <div class="container-fluid h-100">
        <div class="slide-content animate__animated animate__fadeInLeft">
            <span class="badge bg-danger mb-3 px-3 py-2 rounded-pill shadow-sm animate__animated animate__pulse animate__infinite">
                <i class="fas fa-exclamation-circle me-2"></i>DARURAT GIZI NASIONAL 2026
            </span>
            <h1 class="display-3 fw-800" style="line-height: 1.1;">
                Mahalkan Rokok!<br>
                <span style="color: var(--brand-cyan);">Selamatkan Nyawa</span> Anak Bangsa.
            </h1>
            <p class="lead mb-4 opacity-100 fw-bold" style="max-width: 600px; text-shadow: 1px 1px 10px rgba(0,0,0,0.5);">
                Mengalihkan belanja rokok ke protein adalah investasi nyata untuk memutus rantai stunting. Mari wujudkan Indonesia Emas tanpa asap rokok.
            </p>
            <div class="d-flex gap-3 flex-wrap">
                <a href="/aktivitas-saya" class="btn-action">
                    Ambil Bagian Sekarang <i class="fas fa-heart ms-2"></i>
                </a>
                <a href="#tentang" class="btn btn-outline-light rounded-pill px-4 d-flex align-items-center">
                    Kenapa Ini Penting?
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Expertise --}}
<section class="expertise-section" id="tentang">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-800" data-aos="fade-up">Langkah Konkret Kami</h2>
            <div class="mx-auto" style="width: 60px; height: 4px; background: var(--brand-cyan); border-radius: 2px;"></div>
        </div>

        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="expertise-card text-center">
                    <img src="https://images.unsplash.com/photo-1593113598332-cd288d649433?auto=format&fit=crop&q=80&w=800" class="w-100" style="height:220px; object-fit:cover;" alt="Volunteer">
                    <div class="p-4">
                        <h4 class="fw-bold" style="color:var(--brand-blue)">Edukasi Keluarga</h4>
                        <p class="text-muted">Mendampingi orang tua untuk memprioritaskan gizi protein hewani di atas pengeluaran rokok.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="expertise-card text-center">
                    <img src="https://images.unsplash.com/photo-1532938911079-1b06ac7ceec7?auto=format&fit=crop&q=80&w=800" class="w-100" style="height:220px; object-fit:cover;" alt="Donasi">
                    <div class="p-4">
                        <h4 class="fw-bold" style="color:var(--brand-blue)">Intervensi Gizi</h4>
                        <p class="text-muted">Menyalurkan bantuan pangan sehat langsung ke daerah dengan angka stunting tertinggi.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="expertise-card text-center">
                    <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&q=80&w=800" class="w-100" style="height:220px; object-fit:cover;" alt="Intervensi">
                    <div class="p-4">
                        <h4 class="fw-bold" style="color:var(--brand-blue)">Advokasi Kebijakan</h4>
                        <p class="text-muted">Mendorong regulasi kenaikan harga rokok demi perlindungan daya beli pangan bergizi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Berita --}}
<section class="py-5" style="background: white;">
    <div class="container">
        <div class="d-flex justify-content-between align-items-end mb-4">
            <div>
                <h2 class="fw-800 mb-0">Wawasan Terbaru</h2>
                <p class="text-muted mb-0">Informasi dan data terkini dari lapangan</p>
            </div>
            <a href="/berita" class="text-decoration-none fw-bold" style="color: var(--brand-blue);">Lihat Semua Berita <i class="fas fa-chevron-right ms-1"></i></a>
        </div>

        <div class="scroll-container px-2">
            @php $defaultImages = ['gambar 2.jpg', 'gambar 3.jpg', 'gambar 4.jpg', 'gambar_1.jpg']; @endphp
            @if(isset($beritas))
                @foreach($beritas as $berita)
                    <a href="/berita/{{ $berita->slug }}" class="kolom-berita">
                        <img src="{{ $berita->gambar ? asset('storage/' . $berita->gambar) : asset('images/' . $defaultImages[$loop->index % 4]) }}" class="w-100" style="height:180px; object-fit:cover; border-radius: 15px 15px 0 0;" alt="News">
                        <div class="p-4">
                            <h6 class="fw-bold mb-3" style="line-height:1.5;">{{ Str::limit($berita->judul, 60) }}</h6>
                            <div class="d-flex align-items-center text-muted small">
                                <img src="https://ui-avatars.com/api/?name={{ $berita->penulis }}&background=random" class="rounded-circle me-2" width="20" alt="Author">
                                {{ $berita->penulis }}
                            </div>
                        </div>
                    </a>
                @endforeach
            @endif
        </div>
    </div>
</section>

{{-- CTA --}}
<div class="container py-5">
    <section class="cta-banner" data-aos="zoom-in" style="background: linear-gradient(135deg, #01579b, #00acc1); border-radius: 30px; padding: 60px 20px;">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center text-white">
                <h2 class="display-5 fw-800 mb-3">Jadilah Bagian dari Solusi</h2>
                <p class="lead mb-4 opacity-90">Suara Anda menentukan masa depan anak-anak Indonesia. Mari bergerak bersama untuk generasi bebas stunting.</p>
                <a href="/profil" class="btn btn-light btn-lg rounded-pill px-5 fw-bold text-primary shadow-lg transition">Gabung Relawan</a>
            </div>
        </div>
    </section>
</div>

{{-- Mitra Strategis --}}
<section class="py-5 bg-white">
    <div class="container text-center">
        <p class="text-uppercase tracking-widest fw-bold text-muted small mb-5">KERJA SAMA STRATEGIS</p>
        <div class="row align-items-center justify-content-center g-5">
            <div class="col-6 col-md-2 mitra-item" data-aos="fade-up">
                <img src="{{ asset('images/pmi.jpg') }}" class="img-fluid" alt="PMI">
            </div>
            <div class="col-6 col-md-2 mitra-item" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('images/unimus.jpg') }}" class="img-fluid" alt="UNIMUS">
            </div>
            <div class="col-6 col-md-2 mitra-item" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('images/ti2.jpg') }}" class="img-fluid" alt="Transparency International">
            </div>
        </div>
    </div>
</section>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        once: true,
        easing: 'ease-in-out'
    });
</script>
@endsection
