@extends('layout.style')

@section('konten')

<style>
    /* Mengatasi teks yang terlalu dekat dengan navigasi */
    .hero-revised {
        padding: 120px 20px 80px 20px; /* Padding atas ditambah agar tidak mepet nav */
        background: linear-gradient(135deg, #0288d1, #26c6da);
        text-align: center;
        color: white;
    }

    .hero-revised h1 {
        font-size: 3rem;
        font-weight: 800;
        margin-bottom: 15px;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
    }

    .hero-revised p {
        font-size: 1.2rem;
        max-width: 800px;
        margin: 0 auto;
        opacity: 0.9;
    }

    /* Styling Section Kegiatan */
    .kegiatan-section {
        padding: 60px 20px;
        background-color: #f8f9fa;
    }

    .section-title {
        text-align: center;
        font-size: 2.5rem;
        color: #333;
        margin-bottom: 50px;
        position: relative;
    }

    .section-title::after {
        content: '';
        display: block;
        width: 80px;
        height: 5px;
        background: #26c6da;
        margin: 15px auto 0;
        border-radius: 10px;
    }

    /* Grid Kartu */
    .grid-kegiatan {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
        max-width: 1400px;
        margin: 0 auto;
    }

    /* Kartu Baru */
    .card-kegiatan {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        border: none;
        display: flex;
        flex-direction: column;
    }

    .card-kegiatan:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(0,0,0,0.15);
    }

    .card-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
        background-color: #eee;
    }

    .card-body {
        padding: 25px;
        flex-grow: 1;
    }

    .card-body h3 {
        font-size: 1.4rem;
        color: #0277bd;
        margin-bottom: 15px;
        font-weight: 700;
        line-height: 1.3;
    }

    .info-item {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
        color: #555;
        font-size: 0.95rem;
    }

    .info-item span {
        margin-right: 12px;
        font-size: 1.2rem;
    }

    .btn-wa {
        display: block;
        text-align: center;
        background: #26c6da;
        color: white;
        text-decoration: none;
        padding: 12px;
        border-radius: 12px;
        font-weight: bold;
        margin-top: 20px;
        transition: background 0.3s;
    }

    .btn-wa:hover {
        background: #0288d1;
        color: white;
    }
</style>

<div class="hero-revised">
    <h1>Tertarik Menjadi Relawan?</h1>
    <p>
        Jadilah bagian dari perubahan! Pilih kegiatan yang sesuai dengan minatmu dan mari bantu sesama dengan penuh semangat.
    </p>
</div>

<section class="kegiatan-section">
    <h2 class="section-title">📅 Daftar Kegiatan & Program Terdekat</h2>

    <div class="grid-kegiatan">
        @forelse($daftarKegiatan as $item)
        <div class="card-kegiatan">
            @php
                // Tentukan apakah ini kegiatan atau program
                $isoKegiatan = $item instanceof \App\Models\Kegiatan;
                $fotoAttr = $isoKegiatan ? 'foto' : 'gambar';
                $namaAttr = $isoKegiatan ? 'nama' : 'nama';
                $lokasiAttr = $isoKegiatan ? 'lokasi' : null;
                $tanggalAttr = $isoKegiatan ? 'tanggal' : null;
                $jamAttr = $isoKegiatan ? 'jam' : null;
                $deskAttr = $isoKegiatan ? 'deskripsi' : 'deskripsi';
            @endphp

            {{-- Tampilkan Foto/Gambar --}}
            @if(isset($item->{$fotoAttr}) && $item->{$fotoAttr})
                <img src="{{ asset('storage/' . $item->{$fotoAttr}) }}" alt="{{ $item->nama }}" class="card-image" style="height: 200px; object-fit: cover;">
            @else
                <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?auto=format&fit=crop&q=80&w=500" alt="{{ $item->nama }}" class="card-image">
            @endif

            <div class="card-body">
                <h3>{{ $item->nama }}</h3>

                {{-- Tampilkan data kegiatan jika tipe kegiatan --}}
                @if($isoKegiatan)
                    @php
                        $tanggalFormatted = \Carbon\Carbon::parse($item->tanggal)->format('d F Y');
                    @endphp
                    <div class="info-item"><span>📅</span> {{ $tanggalFormatted }}</div>
                    <div class="info-item"><span>⏰</span> {{ $item->jam }}</div>
                    <div class="info-item"><span>📍</span> {{ $item->lokasi }}</div>
                    <a href="/pendaftaran-relawan?kegiatan={{ urlencode($item->nama) }}&tanggal={{ urlencode($tanggalFormatted) }}&jam={{ urlencode($item->jam) }}&lokasi={{ urlencode($item->lokasi) }}" class="btn-wa">
                        Daftar Sekarang
                    </a>
                @else
                    {{-- Tampilkan data program --}}
                    <p style="font-size: 0.95rem; color: #666; line-height: 1.5;">{{ Str::limit($item->deskripsi, 100) }}</p>
                    <div class="info-item"><span>🎯</span> {{ $item->tujuan }}</div>
                    <a href="/pendaftaran-relawan?program={{ urlencode($item->nama) }}" class="btn-wa">
                        Daftar Sekarang
                    </a>
                @endif
            </div>
        </div>
        @empty
        <p style="grid-column: 1/-1; text-align: center; padding: 40px;">Tidak ada kegiatan atau program yang tersedia saat ini. Silakan cek kembali nanti.</p>
        @endforelse



    </div>
</section>

@endsection
