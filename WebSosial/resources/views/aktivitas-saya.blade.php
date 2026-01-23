@extends('layout.style')

@section('konten')
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
    :root {
        --brand-primary: #0288d1;
        --brand-secondary: #26c6da;
        --bg-soft: #f8fafc;
        --text-main: #1e293b;
        --glass-border: rgba(255, 255, 255, 0.2);
    }

    body {
        background-color: var(--bg-soft);
        font-family: 'Plus Jakarta Sans', sans-serif;
        color: var(--text-main);
    }

    /* --- Header Dashboard --- */
    .dashboard-hero {
        background: linear-gradient(135deg, var(--brand-primary), var(--brand-secondary));
        color: white;
        padding: 100px 20px 140px;
        text-align: center;
        border-radius: 0 0 50px 50px;
        position: relative;
    }

    .dashboard-hero h1 { font-weight: 800; font-size: 2.8rem; letter-spacing: -1px; }
    .dashboard-hero p { opacity: 0.9; font-size: 1.1rem; }

    /* --- Stat Cards (Floating) --- */
    .dashboard-container { max-width: 1140px; margin: -80px auto 0; padding: 0 20px; position: relative; z-index: 10; }

    .stat-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        gap: 20px;
        margin-bottom: 40px;
    }

    .stat-card {
        background: white;
        padding: 25px;
        border-radius: 24px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        border: 1px solid rgba(226, 232, 240, 0.8);
        transition: transform 0.3s ease;
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .stat-card:hover { transform: translateY(-5px); }

    .stat-icon {
        width: 60px; height: 60px;
        border-radius: 18px;
        display: flex; align-items: center; justify-content: center;
        font-size: 1.5rem;
    }

    .icon-blue { background: #e0f2fe; color: #0369a1; }
    .icon-cyan { background: #ecfeff; color: #0891b2; }
    .icon-orange { background: #fff7ed; color: #c2410c; }

    .stat-info h3 { font-size: 1.8rem; font-weight: 800; margin: 0; color: #0f172a; }
    .stat-info p { font-size: 0.85rem; color: #64748b; margin: 0; font-weight: 600; text-transform: uppercase; }

    /* --- List Kegiatan --- */
    .section-title { font-weight: 700; margin-bottom: 20px; display: flex; align-items: center; gap: 10px; }

    .activity-list-container {
        background: white;
        border-radius: 30px;
        padding: 10px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.03);
        border: 1px solid #f1f5f9;
    }

    .activity-item {
        padding: 20px;
        border-radius: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: 0.2s;
        border-bottom: 1px solid #f8fafc;
    }

    .activity-item:hover { background: #f8fafc; }

    .activity-brand {
        display: flex; align-items: center; gap: 15px;
    }

    .brand-logo {
        width: 50px; height: 50px; background: var(--bg-soft);
        border-radius: 12px; display: flex; align-items: center; justify-content: center;
        font-size: 1.2rem;
    }

    .activity-details h4 { margin: 0; font-size: 1.05rem; font-weight: 700; color: #1e293b; }
    .activity-details span { font-size: 0.85rem; color: #94a3b8; }

    .status-badge {
        padding: 6px 16px; border-radius: 100px; font-size: 0.75rem; font-weight: 700;
        text-transform: uppercase;
    }

    .status-active { background: #dcfce7; color: #166534; }
    .status-pending { background: #fef9c3; color: #854d0e; }

    /* --- Empty State --- */
    .empty-state {
        text-align: center; padding: 60px 20px;
    }
    .empty-state img { width: 180px; opacity: 0.6; margin-bottom: 20px; }

    .btn-discover {
        background: var(--brand-primary); color: white; padding: 12px 30px;
        border-radius: 12px; text-decoration: none; font-weight: 700;
        display: inline-block; transition: 0.3s; margin-top: 20px;
    }
    .btn-discover:hover { background: #0277bd; color: white; box-shadow: 0 10px 20px rgba(2, 136, 209, 0.2); }
</style>

<div class="dashboard-hero animate_animated animate_fadeIn">
    <div class="container">
        <span class="badge bg-white text-primary px-3 py-2 rounded-pill fw-bold mb-3">
            <i class="fas fa-check-circle me-1"></i> VERIFIED VOLUNTEER
        </span>
        <h1>📊 Aktivitas Saya</h1>
        <p>Pantau kontribusi dan jadwal kegiatan sosial Anda secara real-time</p>
    </div>
</div>

<div class="dashboard-container">

    <div class="stat-grid animate_animated animate_fadeInUp">
        <div class="stat-card">
            <div class="stat-icon icon-blue"><i class="fas fa-hands-helping"></i></div>
            <div class="stat-info">
                <p>Total Aktivitas</p>
                <h3>{{ $stat['total'] ?? 0 }}</h3>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon icon-cyan"><i class="fas fa-award"></i></div>
            <div class="stat-info">
                <p>Poin Kontribusi</p>
                <h3>0</h3>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon icon-orange"><i class="fas fa-clock"></i></div>
            <div class="stat-info">
                <p>Jam Relawan</p>
                <h3>0</h3>
            </div>
        </div>
    </div>

    <h5 class="section-title"><i class="fas fa-history text-primary"></i> Riwayat Pendaftaran</h5>
    <div class="activity-list-container animate_animated animate_fadeInUp" style="animation-delay: 0.2s">
        @forelse($aktivitas as $item)
            <div class="activity-item">
                <div class="activity-brand">
                    <div class="brand-logo">🤝</div>
                    <div class="activity-details">
                        <h4>{{ $item->kegiatan }}</h4>
                        <span><i class="far fa-envelope me-1"></i> {{ $item->email }}</span>
                    </div>
                </div>
                <div>
                    <span class="status-badge {{ $item->status == 'Aktif' ? 'status-active' : 'status-pending' }}">
                        {{ $item->status }}
                    </span>
                </div>
            </div>
        @empty
            <div class="empty-state">
                <i class="fas fa-folder-open fa-4x text-light mb-3"></i>
                <h3 class="fw-bold">Belum Ada Aktivitas</h3>
                <p class="text-muted">Anda belum mendaftar pada kegiatan sosial manapun saat ini.</p>
                <a href="/jadwal" class="btn-discover">
                    <i class="fas fa-search me-2"></i>Cari Kegiatan Sosial
                </a>
            </div>
        @endforelse
    </div>

    <div class="text-center mt-5 mb-5">
        <p class="text-muted small">
            <i class="fas fa-shield-alt me-1"></i> Seluruh data pendaftaran Anda terenkripsi dengan aman oleh sistem.
            <br>Server ID: KMK-{{ rand(100,999) }}
        </p>
    </div>
</div>

@endsection
