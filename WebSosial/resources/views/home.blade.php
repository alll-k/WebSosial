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
            <a href="{{ url('/program') }}" class="btn-secondary" class="{{ request()->is('program') ? 'active' : '' }}">Lihat Semua Program</a>
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

<section style="
    background: linear-gradient(135deg, #0099cc, #0077b6);
    padding: 60px 20px;
    margin: 40px auto;
    border-radius: 25px;
    max-width: 1100px;
    text-align: center;
    color: white;
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
">
    <h2 style="font-size: 36px; font-weight: bold; margin-bottom: 15px;">
        Ayo Jadi Relawan!
    </h2>

    <p style="
        font-size: 18px;
        max-width: 750px;
        margin: auto;
        line-height: 1.6;
        margin-bottom: 30px;
    ">
        Dukung kegiatan sosial kami dan jadilah bagian dari perubahan.
        Kehadiranmu sangat berarti bagi masyarakat yang membutuhkan bantuan.
    </p>

    <a href="/daftar-relawan"
       style="
           display: inline-block;
           background: white;
           color: #0077b6;
           padding: 14px 32px;
           font-size: 18px;
           font-weight: bold;
           border-radius: 50px;
           text-decoration: none;
           transition: 0.3s ease;
           box-shadow: 0 4px 12px rgba(255,255,255,0.3);
       "
       onmouseover="this.style.background='#e6f7ff'; this.style.color='#005a8c';"
       onmouseout="this.style.background='white'; this.style.color='#0077b6';"
    >
        Daftar Menjadi Relawan
    </a>
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
