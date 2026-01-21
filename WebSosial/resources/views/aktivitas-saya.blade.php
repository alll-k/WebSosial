@extends('layout.style')

@section('konten')

<style>
    .aktivitas-header {
        background: linear-gradient(135deg, #0288d1, #26c6da);
        color: white;
        padding: 50px 20px;
        text-align: center;
        margin-bottom: 40px;
        border-radius: 10px;
    }

    .aktivitas-header h1 {
        margin: 0;
        font-size: 2.5rem;
    }

    .aktivitas-header p {
        margin: 10px 0 0 0;
        opacity: 0.9;
    }

    .aktivitas-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

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
        transition: 0.3s;
    }

    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 20px rgba(0,0,0,0.15);
    }

    .stat-card h3 {
        color: #0288d1;
        font-size: 3rem;
        margin: 0;
    }

    .stat-card p {
        color: #666;
        margin-top: 10px;
        font-weight: 500;
    }

    .aktivitas-section-title {
        font-size: 1.8rem;
        color: #333;
        margin-bottom: 20px;
        font-weight: 800;
    }

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
        transition: 0.3s;
    }

    .aktivitas-item:hover {
        background: #fafafa;
    }

    .aktivitas-item:last-child {
        border-bottom: none;
    }

    .aktivitas-icon {
        font-size: 3rem;
        min-width: 60px;
        text-align: center;
    }

    .aktivitas-content {
        flex: 1;
    }

    .aktivitas-content h3 {
        margin: 0 0 12px 0;
        color: #0288d1;
        font-size: 1.3rem;
    }

    .aktivitas-type {
        display: inline-block;
        background: #e3f2fd;
        color: #0288d1;
        padding: 4px 10px;
        border-radius: 15px;
        font-size: 0.8rem;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .aktivitas-meta {
        color: #666;
        font-size: 0.95rem;
        margin-bottom: 8px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .aktivitas-deskripsi {
        color: #555;
        margin: 12px 0;
        line-height: 1.6;
    }

    .aktivitas-footer {
        display: flex;
        gap: 15px;
        align-items: center;
        margin-top: 12px;
    }

    .aktivitas-peserta {
        color: #666;
        font-size: 0.9rem;
    }

    .aktivitas-status {
        display: inline-block;
        padding: 6px 14px;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: bold;
    }

    .status-aktif {
        background: #c8e6c9;
        color: #1b5e20;
    }

    .status-selesai {
        background: #f8bbd0;
        color: #880e4f;
    }

    .status-batal {
        background: #ffccbc;
        color: #bf360c;
    }

    .kosong-state {
        text-align: center;
        padding: 80px 20px;
        color: #999;
    }

    .kosong-state p {
        font-size: 1.2rem;
        margin: 20px 0;
    }

    .btn-tambah {
        display: inline-block;
        background: #26c6da;
        color: white;
        padding: 12px 30px;
        border-radius: 50px;
        text-decoration: none;
        font-weight: bold;
        margin-bottom: 30px;
        transition: 0.3s;
    }

    .btn-tambah:hover {
        background: #00bcd4;
    }

    @media (max-width: 768px) {
        .aktivitas-item {
            flex-direction: column;
        }
        .aktivitas-icon {
            font-size: 2rem;
        }
    }
</style>

<div class="aktivitas-container">
    <div class="aktivitas-header">
        <h1>📊 Aktivitas Saya</h1>
        <p>Kelola dan pantau semua aktivitas sosial Anda di sini</p>
    </div>

    <!-- Statistik -->
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

    <!-- Tombol Tambah -->
    <a href="#" class="btn-tambah">+ Tambah Aktivitas Baru</a>

    <!-- Daftar Aktivitas -->
    <h2 class="aktivitas-section-title">Daftar Aktivitas Anda</h2>
    
    @if($aktivitas->count() > 0)
        <div class="aktivitas-list">
            @foreach($aktivitas as $item)
                <div class="aktivitas-item">
                    <div class="aktivitas-icon">
                        @switch($item->tipe_aktivitas)
                            @case('Bakti Sosial')
                                🤝
                                @break
                            @case('Pendidikan')
                                📚
                                @break
                            @case('Kesehatan')
                                ⚕️
                                @break
                            @case('Lingkungan')
                                🌱
                                @break
                            @case('Pemberdayaan Masyarakat')
                                💪
                                @break
                            @default
                                ✨
                        @endswitch
                    </div>
                    <div class="aktivitas-content">
                        <h3>{{ $item->judul }}</h3>
                        <span class="aktivitas-type">{{ $item->tipe_aktivitas }}</span>
                        
                        <div class="aktivitas-meta">
                            <span>📍 {{ $item->lokasi }}</span>
                        </div>
                        <div class="aktivitas-meta">
                            <span>📅 {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</span>
                            <span>⏰ {{ $item->waktu_mulai }} - {{ $item->waktu_selesai }}</span>
                        </div>
                        
                        <p class="aktivitas-deskripsi">{{ $item->deskripsi }}</p>
                        
                        <div class="aktivitas-footer">
                            <span class="aktivitas-peserta">👥 {{ $item->jumlah_peserta }} peserta</span>
                            <span class="aktivitas-status @if($item->status == 'aktif') status-aktif @elseif($item->status == 'selesai') status-selesai @else status-batal @endif">
                                {{ ucfirst($item->status) }}
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="kosong-state">
            <p>📭 Belum ada aktivitas</p>
            <p style="font-size: 1rem; color: #bbb;">Mulai catat aktivitas sosial Anda untuk membantu sesama</p>
        </div>
    @endif
</div>

@endsection
