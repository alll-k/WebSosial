@extends('layout.style')

@section('konten')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
    :root {
        --brand-primary: #0288d1;
        --brand-secondary: #26c6da;
        --ui-bg: #f8fafc;
        --ui-card: #ffffff;
    }

    body { background-color: var(--ui-bg); }

    /* Header Peluncuran */
    .monitoring-hero {
        background: linear-gradient(135deg, var(--brand-primary), var(--brand-secondary));
        color: white; padding: 140px 20px 100px;
        text-align: center; border-radius: 0 0 60px 60px;
    }

    .dashboard-overlap { max-width: 1200px; margin: -60px auto 0; padding: 0 20px; position: relative; z-index: 10; }
    
    .stat-glass-card {
        background: white; border-radius: 24px; padding: 25px;
        border: 1px solid #edf2f7; box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        text-align: center;
    }

    .stat-glass-card h3 { font-size: 2.2rem; font-weight: 800; color: #cbd5e0; margin: 5px 0; }
    .stat-label { font-size: 0.7rem; font-weight: 700; color: #a0aec0; text-transform: uppercase; letter-spacing: 1.2px; }

    /* Empty State Design */
    .empty-state-card {
        background: var(--ui-card); border-radius: 35px; padding: 80px 40px;
        text-align: center; border: 2px dashed #e2e8f0;
        margin: 40px auto 80px; max-width: 1200px;
    }

    .system-status {
        display: inline-flex; align-items: center; gap: 10px;
        background: #fff; padding: 8px 20px; border-radius: 50px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05); font-size: 0.8rem; font-weight: 600;
        color: #64748b; margin-bottom: 30px;
    }

    .status-dot { width: 8px; height: 8px; background: #94a3b8; border-radius: 50%; }
    .online .status-dot { background: #10b981; box-shadow: 0 0 10px #10b981; }

    .btn-action-primary {
        background: var(--brand-primary); color: white; padding: 15px 35px;
        border-radius: 15px; text-decoration: none; font-weight: 700;
        display: inline-block; transition: 0.3s;
    }
    .btn-action-primary:hover { background: #0277bd; transform: translateY(-3px); color: white; }
</style>

<div class="monitoring-hero animate__animated animate__fadeIn">
    <div class="container">
        <span class="badge bg-white text-primary px-4 py-2 rounded-pill fw-bold mb-3 shadow-sm">
            <i class="fas fa-rocket me-2"></i>FASE PRE-OPERASIONAL
        </span>
        <h1 class="display-5 fw-800">Pusat Kendali Relawan</h1>
        <p class="lead opacity-75">Sistem monitoring terpadu untuk melacak kontribusi dan jadwal masa depan Anda.</p>
    </div>
</div>

<div class="dashboard-overlap">
    <div class="row g-4 animate__animated animate__fadeInUp">
        {{-- Semua Statistik Mulai dari Nol --}}
        <div class="col-md-3">
            <div class="stat-glass-card">
                <i class="fas fa-calendar-alt text-light mb-2"></i>
                <div class="stat-label">Kegiatan Diikuti</div>
                <h3>0</h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stat-glass-card">
                <i class="fas fa-users text-light mb-2"></i>
                <div class="stat-label">Jejaring Relawan</div>
                <h3>0</h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stat-glass-card">
                <i class="fas fa-medal text-light mb-2"></i>
                <div class="stat-label">Poin Kontribusi</div>
                <h3>0</h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stat-glass-card">
                <i class="fas fa-shield-alt text-light mb-2"></i>
                <div class="stat-label">Status Verifikasi</div>
                <div class="text-muted fw-bold mt-2" style="font-size: 0.9rem">MENUNGGU DATA</div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="empty-state-card animate__animated animate__fadeInUp animate__delay-1s">
        <div class="system-status online">
            <span class="status-dot"></span> Sistem Monitoring Siap: Menunggu Registrasi Kegiatan
        </div>
        
        <div class="mb-4">
            <i class="fas fa-database fa-4x text-light mb-4"></i>
            <h2 class="fw-bold">Belum Ada Aktivitas Tercatat</h2>
            <p class="text-muted mx-auto" style="max-width: 500px;">
                Panel ini akan otomatis menampilkan progres kegiatan, logistik, dan e-tiket setelah Anda mendaftar pada jadwal kegiatan yang tersedia.
            </p>
        </div>

        <div class="d-flex justify-content-center gap-3">
            <a href="/jadwal" class="btn-action-primary shadow-sm">
                <i class="fas fa-search me-2"></i>Jelajahi Jadwal Kegiatan
            </a>
        </div>
    </div>

    <div class="text-center text-muted small mt-n4 mb-5">
        <p><i class="fas fa-lock me-1"></i> Enkripsi End-to-End Aktif | Server ID: KMK-{{ rand(100,999) }}</p>
    </div>
</div>

@endsection