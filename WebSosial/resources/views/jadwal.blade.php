@extends('layout.style')

@section('konten')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
    /* Styling Hero */
    .hero-revised {
        padding: 140px 20px 100px 20px;
        background: linear-gradient(135deg, #0288d1, #26c6da);
        text-align: center;
        color: white;
        border-radius: 0 0 50px 50px;
    }

    .hero-revised h1 { font-size: 3rem; font-weight: 800; margin-bottom: 15px; }

    /* Container & Section */
    .kegiatan-section { padding: 80px 20px; background-color: #f8fafc; }
    
    .section-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1200px;
        margin: 0 auto 50px;
    }

    /* Grid & Cards */
    .grid-kegiatan {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 30px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .card-kegiatan {
        background: white;
        border-radius: 25px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        transition: 0.3s;
        border: 1px solid #edf2f7;
        position: relative;
    }

    .card-kegiatan:hover { transform: translateY(-10px); box-shadow: 0 20px 40px rgba(0,0,0,0.1); }

    .card-image { width: 100%; height: 220px; object-fit: cover; }

    /* Admin Badge & Controls */
    .admin-controls {
        position: absolute;
        top: 15px; right: 15px;
        display: flex; gap: 8px;
        z-index: 5;
    }
    .btn-admin-action {
        background: rgba(255,255,255,0.9);
        border: none; width: 35px; height: 35px;
        border-radius: 10px; color: #333;
        display: flex; align-items: center; justify-content: center;
        transition: 0.3s;
    }
    .btn-admin-action:hover { background: #ff5252; color: white; }

    .card-body { padding: 30px; }
    .card-body h3 { font-size: 1.25rem; font-weight: 700; color: #1a202c; margin-bottom: 15px; height: 3rem; overflow: hidden; }

    .info-item { display: flex; align-items: center; margin-bottom: 12px; color: #4a5568; font-size: 0.9rem; }
    .info-item i { width: 25px; color: #26c6da; font-size: 1.1rem; }

    .btn-daftar {
        display: block; text-align: center;
        background: linear-gradient(135deg, #0288d1, #26c6da);
        color: white; text-decoration: none; padding: 14px;
        border-radius: 15px; font-weight: 700; margin-top: 20px;
        transition: 0.3s;
    }
    .btn-daftar:hover { opacity: 0.9; color: white; box-shadow: 0 10px 20px rgba(38, 198, 218, 0.3); }
</style>

<div class="hero-revised">
    <div class="container">
        <span class="badge bg-white text-primary px-3 py-2 rounded-pill fw-bold mb-3 shadow-sm">OPEN RECRUITMENT RELAWAN</span>
        <h1>Jadilah Relawan Kebaikan</h1>
        <p>Bergabunglah dengan ribuan relawan lainnya untuk menciptakan dampak positif bagi masyarakat.</p>
    </div>
</div>

<section class="kegiatan-section">
    <div class="section-header">
        <div>
            <h2 class="fw-800 mb-0">📅 Jadwal Kegiatan Mendatang</h2>
            <p class="text-muted">Kegiatan diverifikasi tim admin untuk memastikan keamanan relawan.</p>
        </div>
        <button class="btn btn-dark rounded-pill px-4 fw-bold shadow-sm" data-bs-toggle="modal" data-bs-target="#modalTambahKegiatan">
            <i class="fas fa-plus-circle me-2"></i>Tambah Kegiatan
        </button>
    </div>

    <div class="grid-kegiatan">
        @php
            // Simulasi Data untuk Demo (Nanti ganti dengan data dari Controller/Database)
            $kegiatans = [
                ['judul' => 'Bakti Sosial Sembako', 'lokasi' => 'Desa Mekarsari', 'jam' => '08.00 - 12.00', 'img' => 'photo-1488521787991-ed7bbaae773c', 'tambah_hari' => 10],
                ['judul' => 'Pemeriksaan Kesehatan', 'lokasi' => 'Kecamatan Andir', 'jam' => '09.00 - 13.00', 'img' => 'photo-1584515933487-779824d29309', 'tambah_hari' => 15],
                ['judul' => 'Trauma Healing Anak', 'lokasi' => 'Rumah Belajar Cibeunying', 'jam' => '13.00 - 16.00', 'img' => 'photo-1503454537195-1dcabb73ffb9', 'tambah_hari' => 22]
            ];
        @endphp

        @forelse($kegiatans as $k)
        <div class="card-kegiatan">
            <div class="admin-controls">
                <button class="btn-admin-action" title="Edit"><i class="fas fa-edit"></i></button>
                <form action="#" method="POST" onsubmit="return confirm('Hapus kegiatan ini?')">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn-admin-action" title="Hapus"><i class="fas fa-trash"></i></button>
                </form>
            </div>

            <img src="https://images.unsplash.com/{{ $k['img'] }}?auto=format&fit=crop&q=80&w=500" alt="Kegiatan" class="card-image">
            
            <div class="card-body">
                <h3>{{ $k['judul'] }}</h3>
                
                <div class="info-item">
                    <i class="fas fa-calendar-alt"></i>
                    {{-- Logika: Tanggal Hari ini + (7 s/d 30) Hari --}}
                    <b>{{ \Carbon\Carbon::now()->addDays($k['tambah_hari'])->translatedFormat('d F Y') }}</b>
                </div>
                
                <div class="info-item">
                    <i class="fas fa-clock"></i>
                    {{ $k['jam'] }} WIB
                </div>
                
                <div class="info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    {{ $k['lokasi'] }}
                </div>

                <a href="#" class="btn-daftar">Daftar Relawan</a>
            </div>
        </div>
        @empty
        <div class="text-center py-5 col-span-full">
            <p class="text-muted">Belum ada jadwal kegiatan baru.</p>
        </div>
        @endforelse
    </div>
</section>

<div class="modal fade" id="modalTambahKegiatan" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg" style="border-radius: 25px;">
            <div class="modal-header border-0 px-4 pt-4">
                <h5 class="fw-bold">Buat Jadwal Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="#" method="POST">
                @csrf
                <div class="modal-body px-4">
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Judul Kegiatan</label>
                        <input type="text" class="form-control rounded-3" placeholder="Contoh: Bersih Pantai" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label small fw-bold">Tanggal</label>
                            {{-- Min: Hari ini + 7, Max: Hari ini + 30 --}}
                            <input type="date" class="form-control rounded-3" 
                                   min="{{ \Carbon\Carbon::now()->addDays(7)->format('Y-m-d') }}" 
                                   max="{{ \Carbon\Carbon::now()->addDays(30)->format('Y-m-d') }}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label small fw-bold">Lokasi</label>
                            <input type="text" class="form-control rounded-3" placeholder="Nama Kota/Desa" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0 px-4 pb-4">
                    <button type="submit" class="btn-daftar w-100 shadow-none m-0">Simpan Jadwal</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection