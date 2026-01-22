@extends('layout.style')

@section('konten')
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
    :root {
        --brand-primary: #0288d1;
        --brand-secondary: #26c6da;
        --soft-bg: #f8fafc;
    }

    body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: var(--soft-bg); color: #334155; }

    /* Hero Section */
    .hero-launch {
        padding: 140px 20px 100px;
        background: linear-gradient(rgba(2, 136, 209, 0.8), rgba(15, 23, 42, 0.8)), url('https://images.unsplash.com/photo-1532629345422-7515f3d16bb6?q=80&w=2070');
        background-size: cover;
        background-position: center;
        text-align: center;
        color: white;
        border-radius: 0 0 60px 60px;
    }

    /* Status Card */
    .status-card {
        background: white;
        padding: 40px;
        margin-top: -60px;
        border-radius: 30px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.08);
        max-width: 900px;
        margin-left: auto; margin-right: auto;
        position: relative; z-index: 10;
    }

    /* Program Card Enhancements */
    .program-grid { padding: 80px 0; }
    
    .card-program {
        border: none;
        border-radius: 28px;
        background: white;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        height: 100%;
        border: 1px solid #f1f5f9;
        overflow: hidden;
    }

    .card-program:hover {
        transform: translateY(-12px);
        box-shadow: 0 30px 60px -12px rgba(2, 136, 209, 0.15);
    }

    .img-wrapper {
        position: relative;
        height: 220px;
        overflow: hidden;
    }

    .img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .card-program:hover .img-wrapper img {
        transform: scale(1.1);
    }

    /* Overlay untuk Badge agar kontras */
    .img-overlay {
        position: absolute;
        bottom: 0; left: 0; right: 0;
        height: 50%;
        background: linear-gradient(transparent, rgba(0,0,0,0.4));
    }

    .badge-category {
        position: absolute;
        bottom: 15px; left: 15px;
        background: white;
        padding: 6px 14px;
        border-radius: 12px;
        font-size: 0.7rem;
        font-weight: 800;
        color: var(--brand-primary);
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        z-index: 2;
    }

    .progress-minimal {
        height: 8px;
        background: #f1f5f9;
        border-radius: 10px;
        margin: 20px 0 10px;
    }

    .btn-donate-now {
        background: linear-gradient(135deg, var(--brand-primary), var(--brand-secondary));
        color: white;
        border: none;
        border-radius: 18px;
        padding: 14px;
        font-weight: 700;
        width: 100%;
        display: block;
        text-decoration: none;
        text-align: center;
        transition: 0.3s;
        box-shadow: 0 10px 15px -3px rgba(2, 136, 209, 0.3);
    }

    .btn-donate-now:hover { opacity: 0.9; color: white; transform: translateY(-2px); }

</style>

{{-- 1. Hero --}}
<div class="hero-launch">
    <div class="container">
        <span class="badge bg-white text-primary mb-3 px-4 py-2 rounded-pill fw-bold shadow-sm">LAUNCHING 2026</span>
        <h1 class="fw-800 display-4">Mulai Langkah Kebaikan Pertama</h1>
        <p class="fs-5 opacity-90 mx-auto" style="max-width: 700px;">Jadilah bagian dari sejarah. Program kemanusiaan kami dirancang untuk memberikan dampak nyata dan berkelanjutan.</p>
    </div>
</div>

{{-- 2. Transparansi Awal --}}
<div class="container">
    <div class="status-card">
        <div class="row align-items-center">
            <div class="col-md-8 text-md-start text-center">
                <h4 class="fw-bold mb-1 text-dark">Siap Menyalurkan Amanah</h4>
                <p class="text-muted mb-0">Sistem kami siap mencatat setiap rupiah kebaikan Anda secara transparan.</p>
            </div>
            <div class="col-md-4 text-md-end text-center mt-3 mt-md-0">
                <div class="d-inline-block border-start-md ps-md-4">
                    <span class="d-block h2 fw-800 text-primary mb-0">Rp 0</span>
                    <small class="text-muted fw-bold text-uppercase" style="letter-spacing: 1px;">Dana Terkumpul</small>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- 3. Daftar Program Aktif --}}
<section class="program-grid">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-800">Program Kemanusiaan Unggulan</h2>
            <div class="mx-auto bg-primary rounded-pill" style="height: 4px; width: 60px;"></div>
        </div>

        <div class="row g-4">
            {{-- Program 1: INFRASTRUKTUR --}}
            <div class="col-lg-4 col-md-6">
                <div class="card card-program shadow-sm">
                    <div class="img-wrapper">
                        <img src="https://images.unsplash.com/photo-1590005024862-6b67679a29fb?q=80&w=800" alt="Sumur Air Bersih">
                        <div class="img-overlay"></div>
                        <span class="badge-category">Infrastruktur</span>
                    </div>
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-dark mb-3">Sumur Air Bersih Desa Pelosok</h5>
                        <p class="small text-muted mb-4">Membantu warga mendapatkan akses air bersih tanpa harus berjalan jauh setiap hari.</p>
                        
                        <div class="progress-minimal">
                            <div class="progress-bar" style="width: 0%; background: var(--brand-secondary);"></div>
                        </div>
                        
                        <div class="d-flex justify-content-between mb-4">
                            <div class="small">
                                <span class="d-block text-muted">Terkumpul</span>
                                <span class="fw-bold text-dark">Rp 0</span>
                            </div>
                            <div class="small text-end">
                                <span class="d-block text-muted">Target</span>
                                <span class="fw-bold text-primary">Rp 25.000.000</span>
                            </div>
                        </div>

                        <a href="{{ route('donasi.form') }}" class="btn-donate-now">Wujudkan Sekarang</a>
                    </div>
                </div>
            </div>

            {{-- Program 2: PENDIDIKAN --}}
            <div class="col-lg-4 col-md-6">
                <div class="card card-program shadow-sm">
                    <div class="img-wrapper">
                        <img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?q=80&w=800" alt="Pendidikan">
                        <div class="img-overlay"></div>
                        <span class="badge-category">Pendidikan</span>
                    </div>
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-dark mb-3">Paket Alat Tulis & Seragam Yatim</h5>
                        <p class="small text-muted mb-4">Lengkapi kebutuhan sekolah anak-anak yatim agar tetap semangat menggapai cita-cita.</p>
                        
                        <div class="progress-minimal">
                            <div class="progress-bar" style="width: 0%; background: var(--brand-secondary);"></div>
                        </div>
                        
                        <div class="d-flex justify-content-between mb-4">
                            <div class="small">
                                <span class="d-block text-muted">Terkumpul</span>
                                <span class="fw-bold text-dark">Rp 0</span>
                            </div>
                            <div class="small text-end">
                                <span class="d-block text-muted">Target</span>
                                <span class="fw-bold text-primary">Rp 15.000.000</span>
                            </div>
                        </div>

                        <a href="{{ route('donasi.form') }}" class="btn-donate-now">Bantu Pendidikan</a>
                    </div>
                </div>
            </div>

            {{-- Program 3: KESEHATAN --}}
            <div class="col-lg-4 col-md-6">
                <div class="card card-program shadow-sm">
                    <div class="img-wrapper">
                        <img src="https://images.unsplash.com/photo-1584515933487-779824d29309?q=80&w=800" alt="Kesehatan">
                        <div class="img-overlay"></div>
                        <span class="badge-category">Kesehatan</span>
                    </div>
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-dark mb-3">Operasi Katarak Gratis Lansia</h5>
                        <p class="small text-muted mb-4">Bantu kakek dan nenek melihat indahnya dunia dan wajah cucu mereka kembali.</p>
                        
                        <div class="progress-minimal">
                            <div class="progress-bar" style="width: 0%; background: var(--brand-secondary);"></div>
                        </div>
                        
                        <div class="d-flex justify-content-between mb-4">
                            <div class="small">
                                <span class="d-block text-muted">Terkumpul</span>
                                <span class="fw-bold text-dark">Rp 0</span>
                            </div>
                            <div class="small text-end">
                                <span class="d-block text-muted">Target</span>
                                <span class="fw-bold text-primary">Rp 40.000.000</span>
                            </div>
                        </div>

                        <a href="{{ route('donasi.form') }}" class="btn-donate-now">Berikan Penglihatan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 4. Trust Builder --}}
<section class="py-5 bg-dark text-white rounded-5 mx-3 mb-5 shadow-lg">
    <div class="container text-center py-4">
        <h3 class="fw-800 mb-5">Standar Transparansi Kami</h3>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="p-4 rounded-4 bg-secondary bg-opacity-10">
                    <i class="fas fa-shield-alt fa-2x text-info mb-3"></i>
                    <h6 class="fw-bold">Audit Publik</h6>
                    <p class="small opacity-75 mb-0">Laporan keuangan yang diperiksa secara berkala.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 rounded-4 bg-secondary bg-opacity-10">
                    <i class="fas fa-bolt fa-2x text-info mb-3"></i>
                    <h6 class="fw-bold">Penyaluran Cepat</h6>
                    <p class="small opacity-75 mb-0">Dana segera disalurkan begitu target program tercapai.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 rounded-4 bg-secondary bg-opacity-10">
                    <i class="fas fa-heart fa-2x text-info mb-3"></i>
                    <h6 class="fw-bold">Tepat Sasaran</h6>
                    <p class="small opacity-75 mb-0">Verifikasi lapangan ketat untuk setiap penerima manfaat.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="text-center py-4 text-muted small">
    <p>© 2026 Yayasan Kebaikan Indonesia | Berizin Kemensos RI</p>
</footer>

@endsection