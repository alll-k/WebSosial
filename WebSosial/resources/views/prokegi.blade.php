@extends ('layout.style')

@section ('konten')
<br><br><br>
<section class="program-banner">
    <img src="{{ asset('images/gambar 4.jpg') }}" 
         alt="Gambar Kegiatan Sosial Relawan" loading="lazy">
    <div class="banner-text">
        <h1>Program & Kegiatan Sosial Kami</h1>
        <p>Lihat berbagai inisiatif yang mengubah masyarakat.</p>
    </div>
</section>

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
@endsection