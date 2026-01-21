@extends('layout.style')

@section('konten')

<style>
    /* 1. Konsistensi Hero Section */
    .hero-tentang-revised {
        padding: 130px 20px 80px 20px;
        background: linear-gradient(135deg, #0288d1, #26c6da);
        text-align: center;
        color: white;
    }

    .hero-tentang-revised h1 {
        font-size: 3.5rem;
        font-weight: 800;
        margin-bottom: 15px;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
    }

    /* 2. Intro Section */
    .section-padding { padding: 80px 20px; }
    .bg-light { background: #f8f9fa; }

    .intro-text {
        max-width: 900px;
        margin: 0 auto;
        text-align: center;
        line-height: 1.8;
        font-size: 1.1rem;
        color: #555;
    }

    .section-title {
        text-align: center;
        font-size: 2.5rem;
        color: #333;
        margin-bottom: 40px;
        position: relative;
    }

    .section-title::after {
        content: '';
        display: block;
        width: 60px;
        height: 5px;
        background: #26c6da;
        margin: 15px auto 0;
        border-radius: 10px;
    }

    /* 3. Visi Misi Cards */
    .grid-two {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 30px;
        max-width: 1100px;
        margin: 0 auto;
    }

    .card-modern {
        background: white;
        padding: 40px;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        transition: transform 0.3s ease;
    }

    .card-modern:hover { transform: translateY(-10px); }

    .icon-box {
        font-size: 3rem;
        margin-bottom: 20px;
        display: inline-block;
    }

    /* 4. Timeline */
    .timeline-container {
        max-width: 800px;
        margin: 0 auto;
        position: relative;
    }

    .timeline-container::before {
        content: '';
        position: absolute;
        left: 20px;
        height: 100%;
        width: 4px;
        background: #e0e0e0;
    }

    .timeline-entry {
        position: relative;
        margin-bottom: 50px;
        padding-left: 60px;
    }

    .timeline-entry::before {
        content: '';
        position: absolute;
        left: 11px;
        top: 0;
        width: 22px;
        height: 22px;
        background: #26c6da;
        border: 4px solid white;
        border-radius: 50%;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    /* 5. Team Grid */
    .grid-team {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 25px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .member-card {
        background: white;
        border-radius: 20px;
        padding: 30px;
        text-align: center;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
    }

    .member-img {
        width: 100px; height: 100px;
        background: #f0f0f0;
        border-radius: 50%;
        margin: 0 auto 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 3rem;
    }

    /* 6. Achievement Grid */
    .grid-stats {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        text-align: center;
    }

    .stat-number {
        font-size: 2.5rem;
        font-weight: 800;
        color: #0288d1;
    }

    /* 7. CTA Section */
    .cta-revised {
        background: linear-gradient(135deg, #0288d1, #26c6da);
        color: white;
        text-align: center;
        padding: 80px 20px;
        border-radius: 30px;
        margin: 40px 20px;
    }

    .btn-white {
        background: white;
        color: #0288d1;
        padding: 12px 35px;
        border-radius: 50px;
        text-decoration: none;
        font-weight: bold;
        display: inline-block;
        margin: 10px;
        transition: 0.3s;
    }

    .btn-white:hover { transform: scale(1.05); box-shadow: 0 5px 15px rgba(0,0,0,0.2); }
</style>

<div class="hero-tentang-revised">
    <div class="hero-content">
        <h1>Tentang Kami</h1>
        <p>Aksi Nyata, Harapan Baru, dan Kepedulian untuk Indonesia</p>
    </div>
</div>

<section class="section-padding">
    <div class="intro-text">
        <h2 style="color: #333; margin-bottom: 20px;">Siapa Kami?</h2>
        <p>
            Kami adalah organisasi sosial nirlaba yang berdedikasi untuk memberikan dampak positif bagi masyarakat Indonesia. 
            Sejak didirikan pada tahun 2012, kami telah melayani lebih dari <strong>5000 penerima manfaat</strong> melalui berbagai program sosial, 
            pendidikan, kesehatan, dan pemberdayaan ekonomi.
        </p>
    </div>
</section>

<section class="section-padding bg-light">
    <h2 class="section-title">Visi & Misi Kami</h2>
    <div class="grid-two">
        <div class="card-modern">
            <span class="icon-box">🎯</span>
            <h3>Visi</h3>
            <p><strong>"Masyarakat Indonesia yang Sejahtera, Mandiri, dan Bermartabat"</strong></p>
            <p style="font-size: 0.95rem; color: #777;">Menciptakan ekosistem di mana setiap individu memiliki akses penuh terhadap pendidikan, kesehatan, dan peluang ekonomi yang adil.</p>
        </div>
        <div class="card-modern">
            <span class="icon-box">💪</span>
            <h3>Misi</h3>
            <ul style="text-align: left; color: #555; padding-left: 20px;">
                <li>Pendidikan berkualitas untuk anak pra-sejahtera.</li>
                <li>Layanan kesehatan gratis di daerah terpencil.</li>
                <li>Pemberdayaan ekonomi melalui UMKM.</li>
                <li>Mobilisasi relawan untuk aksi sosial nyata.</li>
            </ul>
        </div>
    </div>
</section>

<section class="section-padding">
    <h2 class="section-title">Perjalanan Kami</h2>
    <div class="timeline-container">
        <div class="timeline-entry">
            <h3>2012 - Awal Perjuangan</h3>
            <p>Dimulai oleh sekelompok mahasiswa dengan bimbingan belajar gratis untuk 20 anak di ruang terbuka.</p>
        </div>
        <div class="timeline-entry">
            <h3>2016 - Program Kesehatan</h3>
            <p>Memulai vaksinasi dan pemeriksaan kesehatan gratis di berbagai desa terpencil.</p>
        </div>
        <div class="timeline-entry">
            <h3>2024 - Masa Depan</h3>
            <p>Terdaftar resmi sebagai Yayasan dengan 156 relawan aktif di 15 Kota/Kabupaten.</p>
        </div>
    </div>
</section>

<section class="section-padding bg-light">
    <div class="grid-stats">
        <div><div class="stat-number">5.2K+</div><p>Penerima Manfaat</p></div>
        <div><div class="stat-number">156</div><p>Relawan Aktif</p></div>
        <div><div class="stat-number">15</div><p>Kota Jangkauan</p></div>
        <div><div class="stat-number">50K+</div><p>Pohon Ditanam</p></div>
    </div>
</section>

<section class="section-padding">
    <h2 class="section-title">Tim Kepemimpinan</h2>
    <div class="grid-team">
        <div class="member-card">
            <div class="member-img">👨‍💼</div>
            <h4>Hammam Al Kamil </h4>
            <p style="color: #0288d1; font-weight: bold;">Ketua</p>
        </div>
        <div class="member-card">
            <div class="member-img">👩‍💻</div>
            <h4>Jenny Wulandari </h4>
            <p style="color: #0288d1; font-weight: bold;">Kepala Admin</p>
        </div>
        <div class="member-card">
            <div class="member-img">👩‍⚕️</div>
            <h4>Dian Fadhilah </h4>
            <p style="color: #0288d1; font-weight: bold;">Kepala Kesehatan</p>
        </div>
        <div class="member-card">
            <div class="member-img">🧑‍💻</div>
            <h4>Arif Surya Saputra </h4>
            <p style="color: #0288d1; font-weight: bold;">Kepala Teknologi</p>
        </div>
        <div class="member-card">
            <div class="member-img">👷‍♂️</div>
            <h4>Muhammad Aqil Miqdadu Fatih</h4>
            <p style="color: #0288d1; font-weight: bold;">Kepala Relawan</p>
        </div>
    </div>
</section>

@endsection