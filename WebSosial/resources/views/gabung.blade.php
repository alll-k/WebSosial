@extends('layout.style')

@section('konten')
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

<style>
    :root {
        --brand-primary: #0288d1;
        --brand-secondary: #26c6da;
        --brand-dark: #0f172a;
        --text-slate: #64748b;
        --bg-light: #f8fafc;
    }

    body { 
        font-family: 'Plus Jakarta Sans', sans-serif; 
        background-color: #ffffff;
    }

    /* --- Hero Section Terintegrasi --- */
    .hero-volunteer {
        padding: 160px 20px 100px;
        background: linear-gradient(rgba(15, 23, 42, 0.8), rgba(15, 23, 42, 0.8)), 
                    url('{{ asset("images/gambar 4.jpg") }}');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        text-align: center;
        color: white;
        border-radius: 0 0 50px 50px;
    }

    .hero-volunteer h1 {
        font-size: clamp(2.5rem, 5vw, 3.5rem);
        font-weight: 800;
        margin-bottom: 20px;
    }

    /* --- Alur Pendaftaran (Step-by-Step) --- */
    .step-container {
        margin-top: -60px;
        position: relative;
        z-index: 10;
        padding: 0 15px;
    }

    .step-box {
        background: white;
        border-radius: 24px;
        padding: 40px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        border: 1px solid #f1f5f9;
    }

    .step-item {
        text-align: center;
        padding: 20px;
    }

    .step-number {
        width: 50px;
        height: 50px;
        background: var(--brand-secondary);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 800;
        margin: 0 auto 20px;
        box-shadow: 0 10px 15px rgba(38, 198, 218, 0.3);
    }

    /* --- Content Sections --- */
    .section-padding { padding: 80px 0; }

    .card-modern {
        background: var(--bg-light);
        border-radius: 24px;
        padding: 40px;
        border: 1px solid #e2e8f0;
        height: 100%;
        transition: 0.3s;
    }

    .card-modern:hover {
        background: white;
        border-color: var(--brand-primary);
        box-shadow: 0 20px 30px rgba(0,0,0,0.05);
    }

    .card-modern h3 {
        color: var(--brand-dark);
        font-weight: 700;
        margin-bottom: 25px;
        display: flex;
        align-items: center;
        gap: 15px;
    }

    /* --- Requirement List --- */
    .requirement-list {
        list-style: none;
        padding: 0;
    }

    .requirement-list li {
        padding: 12px 0;
        display: flex;
        align-items: flex-start;
        gap: 12px;
        color: var(--text-slate);
        border-bottom: 1px solid #e2e8f0;
    }

    .requirement-list li i {
        color: #10b981;
        margin-top: 5px;
    }

    /* --- Form Info Section --- */
    .data-info-box {
        background: var(--brand-dark);
        color: white;
        border-radius: 30px;
        padding: 60px;
        margin: 60px 0;
    }

    .data-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        margin-top: 30px;
    }

    .data-item {
        background: rgba(255,255,255,0.1);
        padding: 15px 20px;
        border-radius: 12px;
        font-size: 0.9rem;
    }

    /* --- CTA Button --- */
    .btn-register-main {
        background: linear-gradient(135deg, var(--brand-primary), var(--brand-secondary));
        color: white;
        padding: 20px 50px;
        border-radius: 100px;
        font-weight: 800;
        text-decoration: none;
        display: inline-block;
        font-size: 1.2rem;
        box-shadow: 0 15px 30px rgba(2, 136, 209, 0.3);
        transition: 0.3s;
    }

    .btn-register-main:hover {
        transform: translateY(-5px);
        color: white;
        box-shadow: 0 20px 40px rgba(2, 136, 209, 0.4);
    }

    .privacy-note {
        font-size: 0.85rem;
        color: var(--text-slate);
        margin-top: 20px;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }
</style>

<div class="hero-volunteer">
    <div class="container">
        <h1>Wujudkan Dampak Bersama Kami</h1>
        <p class="lead opacity-75">Sistem Pendaftaran Relawan Yayasan Relawan Plus yang Transparan dan Terintegrasi.</p>
    </div>
</div>

<div class="container step-container">
    <div class="step-box">
        <div class="row g-4">
            <div class="col-md-4 step-item">
                <div class="step-number">1</div>
                <h6>Isi Formulir</h6>
                <p class="small text-muted mb-0">Lengkapi data diri dan minat keahlian Anda melalui sistem.</p>
            </div>
            <div class="col-md-4 step-item border-start border-end">
                <div class="step-number">2</div>
                <h6>Verifikasi Data</h6>
                <p class="small text-muted mb-0">Tim kami akan meninjau profil Anda dalam 2-3 hari kerja.</p>
            </div>
            <div class="col-md-4 step-item">
                <div class="step-number">3</div>
                <h6>Mulai Beraksi</h6>
                <p class="small text-muted mb-0">Dapatkan akses ke dashboard relawan dan mulai berkontribusi.</p>
            </div>
        </div>
    </div>
</div>

<div class="container section-padding">
    <div class="row g-5">
        <div class="col-lg-6">
            <div class="card-modern">
                <h3><i class="fas fa-clipboard-list text-primary"></i> Persiapan Diri</h3>
                <ul class="requirement-list">
                    <li><i class="fas fa-check-circle"></i> Memiliki komitmen waktu minimal sesuai durasi program.</li>
                    <li><i class="fas fa-check-circle"></i> Sehat jasmani dan rohani untuk kegiatan lapangan.</li>
                    <li><i class="fas fa-check-circle"></i> Memiliki semangat kolaborasi dalam tim yang heterogen.</li>
                    <li><i class="fas fa-check-circle"></i> Siap mengikuti prosedur K3 (Kesehatan & Keselamatan Kerja).</li>
                </ul>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card-modern">
                <h3><i class="fas fa-award text-success"></i> Benefit Relawan</h3>
                <ul class="requirement-list">
                    <li><i class="fas fa-check-circle"></i> Sertifikat Elektronik Resmi Yayasan Relawan Plus.</li>
                    <li><i class="fas fa-check-circle"></i> Networking dengan profesional dan komunitas sosial.</li>
                    <li><i class="fas fa-check-circle"></i> Pelatihan <i>soft-skill</i> dan pembekalan materi khusus.</li>
                    <li><i class="fas fa-check-circle"></i> Asuransi perlindungan selama kegiatan (Program khusus).</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="data-info-box">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <h2 class="fw-bold">Keamanan Data Anda Adalah Prioritas</h2>
                <p class="opacity-75">Kami menggunakan sistem enkripsi untuk melindungi data pribadi yang Anda kirimkan. Informasi ini hanya digunakan untuk keperluan koordinasi relawan.</p>
            </div>
            <div class="col-lg-7">
                <div class="data-grid">
                    <div class="data-item"><i class="fas fa-id-card me-2"></i> Identitas Lengkap</div>
                    <div class="data-item"><i class="fas fa-phone me-2"></i> Kontak WhatsApp</div>
                    <div class="data-item"><i class="fas fa-map-marker-alt me-2"></i> Domisili</div>
                    <div class="data-item"><i class="fas fa-tools me-2"></i> Skill Spesifik</div>
                    <div class="data-item"><i class="fas fa-history me-2"></i> Pengalaman</div>
                    <div class="data-item"><i class="fas fa-heart me-2"></i> Motivasi</div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-5">
        <h2 class="fw-bold mb-4">Siap Mengukir Sejarah Baru?</h2>
        <a href="{{ url('/profil') }}" class="btn-register-main">
            <i class="fas fa-edit me-2"></i> Mulai Pendaftaran Sekarang
        </a>
        <p class="privacy-note">
            Dengan mengklik tombol di atas, Anda setuju untuk memberikan data yang benar. 
            Sistem kami akan mengarahkan Anda ke halaman pengisian profil lengkap.
        </p>
    </div>
</div>

<footer class="py-5 text-center bg-light border-top">
    <div class="container">
        <p class="text-muted small">© 2026 Yayasan Relawan Plus Indonesia. <br> Standar Operasional Pendaftaran Relawan v2.0 - Terverifikasi Kemensos RI.</p>
    </div>
</footer>

@endsection