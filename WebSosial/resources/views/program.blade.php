@extends('layout.style')

@section('konten')

<style>
    /* CSS Seragam dengan Desain Sebelumnya */
    .hero-revised {
        padding: 120px 20px 80px 20px;
        background: linear-gradient(135deg, #0288d1, #26c6da);
        text-align: center;
        color: white;
        position: relative;
        overflow: hidden;
    }

    .hero-revised img {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        object-fit: cover;
        opacity: 0.2; 
        z-index: 0;
    }

    .hero-revised .banner-content { position: relative; z-index: 1; }

    /* Section Dana Terkumpul */
    .stats-section {
        background: white;
        padding: 40px 20px;
        margin-top: -50px; /* Membuat section naik sedikit menimpa hero */
        position: relative;
        z-index: 2;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        max-width: 900px;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
    }

    .amount-total {
        font-size: 3.5rem;
        font-weight: 800;
        color: #0288d1;
        margin: 10px 0;
    }

    /* Section Riwayat Donasi */
    .history-section {
        padding: 60px 20px;
        background-color: #f8f9fa;
    }

    .table-history {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }

    .btn-action {
        display: inline-block;
        background: #26c6da;
        color: white;
        text-decoration: none;
        padding: 15px 40px;
        border-radius: 50px;
        font-weight: bold;
        transition: all 0.3s;
        border: none;
        cursor: pointer;
        font-size: 1.1rem;
    }

    .btn-action:hover {
        background: #0288d1;
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(2, 136, 209, 0.4);
    }
</style>

{{-- 1. Header --}}
<div class="hero-revised">
    <img src="{{ asset('images/gambar 4.jpg') }}" alt="Banner Donasi">
    <div class="banner-content">
        <h1>Satu Kebaikan, Berjuta Harapan</h1>
        <p>Mari bergotong royong membantu sesama melalui program donasi transparan kami.</p>
    </div>
</div>

{{-- 2. Statistik Dana Terkumpul --}}
<div class="container">
    <div class="stats-section">
        <h5 class="text-muted text-uppercase fw-bold">Total Dana Terkumpul Saat Ini</h5>
        
        {{-- Menampilkan nominal uang dengan format Rupiah dari Database --}}
        <div class="amount-total">
            Rp {{ number_format($totalDana ?? 0, 0, ',', '.') }}
        </div>
        
        {{-- Menampilkan jumlah donatur riil --}}
        <p class="text-muted">Dari {{ $totalDonatur ?? 0 }} Donatur Baik Hati</p>
        
        <div class="mt-4">
            <a href="{{ route('donasi.form') }}" class="btn-action">Mulai Berdonasi Sekarang</a>
        </div>
    </div>
</div>

{{-- 3. Riwayat Donasi --}}
<section class="history-section">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">Riwayat Program Donasi Terlaksana</h2>
        
        <div class="row">
            {{-- Program 1 --}}
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm h-100 p-3" style="border-radius: 15px;">
                    <div class="card-body">
                        <span class="badge bg-success mb-2">Selesai</span>
                        <h5 class="fw-bold">Bantuan Gempa Cianjur</h5>
                        <p class="small text-muted">Januari 2026 - Penyaluran sembako dan tenda darurat.</p>
                        <hr>
                        <p class="fw-bold text-primary mb-0">Terkumpul: Rp 50jt</p>
                    </div>
                </div>
            </div>

            {{-- Program 2 --}}
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm h-100 p-3" style="border-radius: 15px;">
                    <div class="card-body">
                        <span class="badge bg-success mb-2">Selesai</span>
                        <h5 class="fw-bold">Beasiswa Anak Pelosok</h5>
                        <p class="small text-muted">Desember 2025 - Distribusi alat tulis dan biaya SPP.</p>
                        <hr>
                        <p class="fw-bold text-primary mb-0">Terkumpul: Rp 35jt</p>
                    </div>
                </div>
            </div>

            {{-- Program 3 --}}
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm h-100 p-3" style="border-radius: 15px;">
                    <div class="card-body">
                        <span class="badge bg-success mb-2">Selesai</span>
                        <h5 class="fw-bold">Sembako Jumat Berkah</h5>
                        <p class="small text-muted">Mingguan - Pembagian paket nasi dan sembako warga.</p>
                        <hr>
                        <p class="fw-bold text-primary mb-0">Terkumpul: Rp 40.4jt</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection