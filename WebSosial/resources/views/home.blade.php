@extends ('layout.style')

@section ('konten')
<div class="hero">
    <div class="hero-text">
        <h1>Selamat Datang di <span>Portal Sosial Kami</span></h1>
        <p>
            Situs resmi yang berfokus pada kegiatan sosial, pelayanan masyarakat, 
            serta informasi penting seputar program kemanusiaan dan pengembangan komunitas.
        </p>

        <a href="{{ url('/tentang') }}" class="btn" class="{{ request()->is('tentang') ? 'active' : '' }}">Tentang Kami</a>
    </div>
</div>

<section id="judul" class="layanan">
    <h2 style="text-align: center">Program & Kegiatan Sosial</h2><br>

    <div class="cards">

        <div class="card">
            <h3>Jadwal Kegiatan Terdekat</h3>
            <p>
              Yuk simak jadwal kegiatan terdekat kami—siapa tahu kamu adalah relawan hebat berikutnya!
            </p><br>
            <a href="{{ url('/jadwal') }}" class="btn-secondary" class="{{ request()->is('jadwal') ? 'active' : '' }}">Lihat Semua Jadwal</a>
        </div>
        <div class="card">
            <h3>Program Pemberdayaan</h3>
            <p>
              Kami memiliki berbagai program relawan yang berfokus membantu masyarakat. Ayo bergabung dan jadilah bagian dari perubahan!
            </p>
            <a href="{{ url('/program') }}" class="btn-secondary" class="{{ request()->is('program') ? 'active' : '' }}">Lihat Semua Jadwal</a>
        </div>

    </div>
</section><br><br>

<section id="judul" class="layanan">

    <button class="zoom-btn" onclick="openZoomBerita()">🔍 Perbesar</button>

    <div id="beritaContainer" class="scroll">
        <h1 style="text-align: center">Berita Terkini Beserta Tanggapan Kami</h1>

        @foreach($beritas as $berita)
            <a href="/berita/{{ $berita['slug'] }}">
                <div class="kolom">
                    <h2>{{ $berita['judul'] }}</h2>
                    <h3>{{ $berita['penulis'] }}</h3>
                </div>
            </a>
            <br>
        @endforeach
    </div>
</section>

<section class="kontak">
    <h2>Hubungi Kami</h2>
    <p style="text-align: center; max-width: 700px; margin: auto;">
        Punya pertanyaan, saran, ingin berdonasi, membutuhkan layanan konsultasi masyarakat,
        atau ingin bekerja sama dalam program sosial?  
        Silakan hubungi kami melalui WhatsApp untuk informasi dan penjadwalan layanan.
    </p>

    <center style="margin-top: 20px;">
        <a href="https://wa.me/628xxx" class="btn-primary">Kontak WhatsApp</a>
    </center>
</section>

@endsection