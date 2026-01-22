@extends('layout.style')

@section('konten')
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

<style>
    :root {
        --brand-primary: #0288d1;
        --brand-secondary: #26c6da;
        --brand-dark: #0f172a;
        --accent-orange: #f59e0b;
        --text-slate: #64748b;
        --glass-white: rgba(255, 255, 255, 0.95);
    }

    body { 
        font-family: 'Plus Jakarta Sans', sans-serif; 
        background-color: #fcfcfd;
        color: var(--brand-dark);
    }

    /* --- Hero Section --- */
    .hero-revised {
        padding: 160px 0 100px;
        background: linear-gradient(rgba(15, 23, 42, 0.8), rgba(15, 23, 42, 0.7)), 
                    url('{{ asset("images/gambar 4.jpg") }}');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        text-align: center;
        color: white;
        border-radius: 0 0 60px 60px;
    }

    .hero-revised h1 {
        font-size: clamp(2.2rem, 5vw, 3.8rem);
        font-weight: 800;
        margin-bottom: 20px;
    }

    /* --- Live Features Section (Fitur yang Sudah Nyata) --- */
    .active-services {
        margin-top: -80px;
        position: relative;
        z-index: 100;
        padding-bottom: 80px;
    }

    .service-card {
        background: white;
        border-radius: 30px;
        padding: 40px 30px;
        border: none;
        box-shadow: 0 20px 40px rgba(0,0,0,0.08);
        transition: all 0.4s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .service-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 30px 60px rgba(2, 136, 209, 0.15);
    }

    .icon-badge {
        width: 70px;
        height: 70px;
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        margin-bottom: 25px;
    }

    /* --- Status Indicators --- */
    .status-online {
        display: inline-flex;
        align-items: center;
        background: #ecfdf5;
        color: #059669;
        padding: 4px 12px;
        border-radius: 100px;
        font-size: 0.75rem;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .status-online i {
        font-size: 0.5rem;
        margin-right: 6px;
        animation: blink 1.5s infinite;
    }

    @keyframes blink {
        0% { opacity: 1; } 50% { opacity: 0.3; } 100% { opacity: 1; }
    }

    .btn-main {
        background: var(--brand-primary);
        color: white;
        border-radius: 15px;
        padding: 12px 25px;
        font-weight: 700;
        text-decoration: none;
        display: inline-block;
        width: 100%;
        text-align: center;
        transition: 0.3s;
        margin-top: auto;
    }

    .btn-main:hover {
        background: var(--brand-dark);
        color: white;
    }

    /* --- Future Roadmap Section --- */
    .roadmap-section {
        padding: 100px 0;
        background: white;
    }

    .info-tag {
        color: var(--brand-primary);
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 0.8rem;
    }
</style>

{{-- Hero --}}
<section class="hero-revised">
    <div class="container">
        <h1>Aksi Nyata, <span style="color: var(--brand-secondary);">Bukan Sekadar Kata.</span></h1>
        <p class="lead opacity-75 mx-auto" style="max-width: 800px;">
            Platform digital Yayasan Relawan Plus kini hadir untuk menjembatani kepedulian Anda. Pilih layanan yang Anda butuhkan dan mari bergerak bersama.
        </p>
    </div>
</section>

{{-- Features Section --}}
<section class="active-services">
    <div class="container">
        <div class="row g-4 justify-content-center">
            
            <div class="col-lg-5">
                <div class="service-card">
                    <div class="status-online">
                        <i class="fas fa-circle"></i> SISTEM AKTIF (TERVERIFIKASI)
                    </div>
                    <div class="icon-badge" style="background: #e0f2fe; color: #0288d1;">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <h3 class="fw-bold">Pendaftaran Relawan</h3>
                    <p class="text-muted">Jadilah bagian dari pasukan garda terdepan kami. Pendaftaran sudah dibuka untuk kegiatan kemanusiaan di wilayah Jawa Tengah dan sekitarnya.</p>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2 small"><i class="fas fa-check text-primary me-2"></i> Pengisian data diri online</li>
                        <li class="mb-2 small"><i class="fas fa-check text-primary me-2"></i> Pemilihan jadwal aksi fleksibel</li>
                        <li class="mb-2 small"><i class="fas fa-check text-primary me-2"></i> Grup koordinasi relawan</li>
                    </ul>
                    <a href="{{ url('/jadwal') }}" class="btn-main">Daftar Jadi Relawan</a>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="service-card">
                    <div class="status-online">
                        <i class="fas fa-circle"></i> GATEWAY AKTIF
                    </div>
                    <div class="icon-badge" style="background: #fef3c7; color: #d97706;">
                        <i class="fas fa-hand-holding-heart"></i>
                    </div>
                    <h3 class="fw-bold">Program Donasi</h3>
                    <p class="text-muted">Salurkan bantuan Anda melalui program-program pilihan. Sistem kami mencatat setiap transaksi untuk transparansi publik yang maksimal.</p>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2 small"><i class="fas fa-check text-warning me-2"></i> Laporan penggunaan dana publik</li>
                        <li class="mb-2 small"><i class="fas fa-check text-warning me-2"></i> Berbagai kategori program bantuan</li>
                        <li class="mb-2 small"><i class="fas fa-check text-warning me-2"></i> Konfirmasi otomatis via sistem</li>
                    </ul>
                    <a href="{{ url('/program') }}" class="btn-main" style="background: var(--brand-secondary);">Donasi Sekarang</a>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- Future Innovation Section --}}
<section class="roadmap-section">
    <div class="container text-center">
        <span class="info-tag">Pengembangan Berkelanjutan</span>
        <h2 class="fw-bold mt-3 mb-5">Inovasi yang Sedang Kami Bangun</h2>
        
        <div class="row g-4 text-start">
            <div class="col-md-4">
                <div class="p-4 border-start border-4 border-primary bg-light">
                    <h5 class="fw-bold">E-Sertifikat Otomatis</h5>
                    <p class="small text-muted mb-0">Sertifikat penghargaan digital bagi relawan yang akan diterbitkan otomatis oleh sistem setelah kegiatan selesai.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 border-start border-4 border-info bg-light">
                    <h5 class="fw-bold">Mobile Apps (Android/iOS)</h5>
                    <p class="small text-muted mb-0">Akses lebih mudah melalui ponsel untuk memantau status donasi dan pendaftaran aksi relawan dalam satu genggaman.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 border-start border-4 border-warning bg-light">
                    <h5 class="fw-bold">Dashboard Audit Publik</h5>
                    <p class="small text-muted mb-0">Halaman khusus yang menampilkan grafik transparansi dana masuk dan keluar secara real-time untuk akuntabilitas.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Trust Footer --}}
<footer class="py-5 bg-white border-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <h5 class="fw-bold mb-1">Yayasan Relawan Plus Indonesia</h5>
                <p class="text-muted small">Terdaftar Resmi & Melayani Masyarakat Sepenuh Hati.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <div class="small text-muted">Operasional & Support:</div>
                <div class="fw-bold">Senin - Minggu (08:00 - 20:00 WIB)</div>
            </div>
        </div>
    </div>
</footer>

@endsection