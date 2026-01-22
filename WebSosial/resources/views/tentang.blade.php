@extends('layout.style')

@section('konten')
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">

<style>
    :root {
        --brand-primary: #0288d1;
        --brand-secondary: #26c6da;
        --brand-dark: #0f172a;
        --soft-bg: #f1f5f9;
        --white: #ffffff;
    }

    body { 
        background-color: var(--white); 
        font-family: 'Inter', sans-serif; 
        color: var(--brand-dark);
        line-height: 1.6;
    }

    /* --- HERO: PRE-LAUNCH MODE --- */
    .about-hero {
        position: relative;
        background: linear-gradient(135deg, rgba(15, 23, 42, 0.9) 0%, rgba(2, 136, 209, 0.8) 100%), 
                    url('https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?q=80&w=2070&auto=format&fit=crop');
        background-size: cover;
        background-position: center;
        padding: 200px 0 160px;
        border-radius: 0 0 80px 80px;
        color: var(--white);
        text-align: center;
    }

    /* --- PROGRESS TRACKER (NEW) --- */
    .launch-progress {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        padding: 30px;
        border-radius: 30px;
        max-width: 600px;
        margin: 40px auto 0;
    }

    .progress-bar-custom {
        height: 8px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 10px;
        overflow: hidden;
        margin-top: 15px;
    }

    .progress-fill {
        width: 75%; /* Sesuaikan persentase progress saat ini */
        height: 100%;
        background: var(--brand-secondary);
        box-shadow: 0 0 15px var(--brand-secondary);
        animation: loadingShift 2s infinite ease-in-out;
    }

    @keyframes loadingShift {
        0% { opacity: 0.8; }
        50% { opacity: 1; }
        100% { opacity: 0.8; }
    }

    /* --- VISION CARD --- */
    .vision-card {
        background: var(--white);
        border-radius: 40px;
        box-shadow: 0 40px 100px -20px rgba(0,0,0,0.1);
        margin-top: -80px;
        padding: 60px;
        border: 1px solid #f1f5f9;
    }

    /* --- TEAM SECTION --- */
    .team-card-premium {
        background: var(--soft-bg);
        padding: 35px 20px;
        border-radius: 30px;
        transition: 0.3s;
        text-align: center;
        border: 1px solid transparent;
    }
    .team-card-premium:hover {
        background: white;
        border-color: var(--brand-primary);
        transform: translateY(-5px);
    }
    .team-img-circle {
        width: 110px;
        height: 110px;
        border-radius: 30px; /* Modern square-round */
        margin-bottom: 20px;
        object-fit: cover;
    }

    /* --- NOTIFICATION BOX --- */
    .notify-me {
        background: var(--brand-dark);
        color: white;
        border-radius: 40px;
        padding: 50px;
        margin-top: 100px;
    }
</style>

<section class="about-hero">
    <div class="container">
        <div class="badge rounded-pill px-4 py-2 mb-3 bg-info text-dark fw-bold">
            <i class="fas fa-tools me-2"></i> WEB DEVELOPMENT IN PROGRESS
        </div>
        <h1 class="display-3 fw-800 mb-3">Membangun Fondasi <br> Kebaikan Digital.</h1>
        <p class="lead opacity-75 mx-auto" style="max-width: 650px;">
            Yayasan Relawan Plus Indonesia sedang mempersiapkan infrastruktur sistem terbaik untuk memastikan transparansi filantropi di tahun 2026.
        </p>
        
        <div class="launch-progress">
            <div class="d-flex justify-content-between small fw-bold">
                <span>Persiapan Sistem</span>
                <span>75% Selesai</span>
            </div>
            <div class="progress-bar-custom">
                <div class="progress-fill"></div>
            </div>
            <p class="mt-3 small opacity-75 mb-0">Target Launching: Kuartal Pertama 2026</p>
        </div>
    </div>
</section>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-11">
            <div class="vision-card">
                <div class="row g-5 align-items-center">
                    <div class="col-md-6">
                        <h6 class="text-primary fw-bold text-uppercase">Fase Pembentukan</h6>
                        <h2 class="fw-bold mb-4">Integritas Sedang <br> Dirancang.</h2>
                        <p class="text-muted mb-4">
                            Relawan+ saat ini berada dalam tahap finalisasi administrasi hukum dan pengembangan dashboard pelaporan publik. Kami memastikan bahwa saat sistem ini dibuka, setiap rupiah yang Anda titipkan dapat dipantau secara langsung.
                        </p>
                        <div class="d-flex gap-3">
                            <div class="p-3 bg-light rounded-4 border flex-fill text-center">
                                <h5 class="fw-bold mb-0">2026</h5>
                                <small class="text-muted">Tahun Operasi</small>
                            </div>
                            <div class="p-3 bg-light rounded-4 border flex-fill text-center">
                                <h5 class="fw-bold mb-0">DPP</h5>
                                <small class="text-muted">Pusat Koordinasi</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-4 border rounded-5 bg-soft">
                            <h6 class="fw-bold mb-3"><i class="fas fa-list-check me-2 text-primary"></i> Checklist Progress:</h6>
                            <div class="d-flex mb-3 opacity-100">
                                <i class="fas fa-check-circle text-success me-3 fs-5"></i>
                                <span>Pendaftaran Yayasan (Kemenkumham)</span>
                            </div>
                            <div class="d-flex mb-3 opacity-100">
                                <i class="fas fa-check-circle text-success me-3 fs-5"></i>
                                <span>Pembentukan Struktur Inti DPP</span>
                            </div>
                            <div class="d-flex mb-3">
                                <i class="fas fa-spinner fa-spin text-primary me-3 fs-5"></i>
                                <span>Pengembangan Web & Database (In-Progress)</span>
                            </div>
                            <div class="d-flex opacity-50">
                                <i class="far fa-circle me-3 fs-5"></i>
                                <span>Open Recruitment Relawan Nasional</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5 mt-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Tim Inisiator</h2>
            <p class="text-muted">Para profesional dibalik pembentukan Yayasan Relawan Plus.</p>
        </div>
        <div class="row g-4 justify-content-center">
            @php
                $team = [
                    ['name' => 'Hammam Al Kamil', 'role' => 'Founder / Ketua', 'bg' => '0288d1'],
                    ['name' => 'Jenny Wulandari', 'role' => 'Bendahara Umum', 'bg' => '26c6da'],
                    ['name' => 'Dian Fadhilah', 'role' => 'Sekretaris', 'bg' => '1e293b'],
                    ['name' => 'Muhammad Aqil', 'role' => 'Ops Manager', 'bg' => '0288d1'],
                    ['name' => 'Surya Arif', 'role' => 'Kemitraan', 'bg' => '26c6da']
                ];
            @endphp
            @foreach($team as $member)
            <div class="col-6 col-md-4 col-lg-2">
                <div class="team-card-premium">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode($member['name']) }}&background={{ $member['bg'] }}&color=fff&size=200" class="team-img-circle">
                    <h6 class="fw-bold mb-1 small">{{ $member['name'] }}</h6>
                    <span class="text-primary" style="font-size: 0.65rem; font-weight: 700; text-transform: uppercase;">{{ $member['role'] }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="notify-me">
        <div class="row align-items-center text-center text-lg-start">
            <div class="col-lg-8">
                <h3 class="fw-bold mb-3">Dapatkan Notifikasi Saat Kami Launching</h3>
                <p class="opacity-75 mb-0">Jadilah bagian dari 1.000 relawan pertama yang akan mengubah wajah filantropi Indonesia.</p>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0 text-lg-end">
                <a href="mailto:info@relawanplus.or.id" class="btn btn-info btn-lg px-5 rounded-pill fw-bold text-dark">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</div>

<footer class="py-5 text-center mt-5 border-top">
    <div class="container">
        <p class="text-muted small">
            <strong>Relawan+ Indonesia</strong><br>
            Sedang dalam tahap pengembangan teknis & legalitas.<br>
            © 2026 Yayasan Relawan Plus Indonesia.
        </p>
    </div>
</footer>

@endsection