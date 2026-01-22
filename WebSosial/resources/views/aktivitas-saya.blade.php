@extends('layout.style')

@section('konten')

<style>
    /* === STYLE KAMU (TIDAK DIUBAH) === */
    .aktivitas-header {
        background: linear-gradient(135deg, #0288d1, #26c6da);
        color: white;
        padding: 80px 20px 40px;
        text-align: center;
        margin-bottom: 40px;
        border-radius: 10px;
    }
    .aktivitas-header h1 { margin: 0; font-size: 2.5rem; }
    .aktivitas-header p { margin: 10px 0 0 0; opacity: 0.9; }

    .aktivitas-container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }

    .stat-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 20px;
        margin-bottom: 40px;
    }

    .stat-card {
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 2px 15px rgba(0,0,0,0.1);
        text-align: center;
    }

    .stat-card h3 { color: #0288d1; font-size: 3rem; margin: 0; }
    .stat-card p { color: #666; margin-top: 10px; font-weight: 500; }

    .aktivitas-list {
        background: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 2px 15px rgba(0,0,0,0.05);
    }

    .aktivitas-item {
        padding: 25px;
        border-bottom: 1px solid #f0f0f0;
        display: flex;
        gap: 20px;
        align-items: flex-start;
    }

    .aktivitas-item:last-child { border-bottom: none; }

    .aktivitas-icon { font-size: 3rem; min-width: 60px; text-align: center; }

    .aktivitas-content h3 {
        margin: 0 0 10px 0;
        color: #0288d1;
        font-size: 1.3rem;
    }

    .aktivitas-meta { color: #666; font-size: 0.95rem; }

    .aktivitas-status {
        display: inline-block;
        padding: 6px 14px;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: bold;
        background: #c8e6c9;
        color: #1b5e20;
        margin-top: 10px;
    }

    .kosong-state {
        text-align: center;
        padding: 80px 20px;
        color: #999;
    }
</style>

<div class="aktivitas-container">
    <!-- HEADER -->
    <div class="aktivitas-header">
        <h1>📊 Aktivitas Saya</h1>
        <p>Kelola dan pantau semua aktivitas sosial Anda di sini</p>
    </div>

    <!-- STATISTIK -->
    <div class="stat-grid">
        <div class="stat-card">
            <h3>{{ $stat['total'] }}</h3>
            <p>Total Aktivitas</p>
        </div>
        <div class="stat-card">
            <h3>{{ $stat['aktif'] }}</h3>
            <p>Aktivitas Aktif</p>
        </div>
        <div class="stat-card">
            <h3>{{ $stat['selesai'] }}</h3>
            <p>Aktivitas Selesai</p>
        </div>
        <div class="stat-card">
            <h3>{{ $stat['peserta'] }}</h3>
            <p>Total Peserta</p>
        </div>
    </div>

    <!-- 🔥 LIST RIWAYAT PENDAFTARAN -->
    <div class="aktivitas-list">
        @forelse($aktivitas as $item)
            <div class="aktivitas-item">
                <div class="aktivitas-icon">🤝</div>

                <div class="aktivitas-content">
                    <h3>{{ $item->kegiatan }}</h3>

                    <div class="aktivitas-meta">
                        📧 {{ $item->email }}
                    </div>

                    <span class="aktivitas-status">
                        {{ $item->status }}
                    </span>
                </div>
            </div>
        @empty
            <div class="kosong-state">
                <p>Belum ada riwayat pendaftaran</p>
            </div>
        @endforelse
    </div>
</div>

@endsection
