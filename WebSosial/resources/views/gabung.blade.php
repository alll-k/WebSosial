@extends('layout.style')

@section('konten')

<style>
    /* Hero Section */
    .hero-gabung {
        padding: 130px 20px 80px 20px;
        background: linear-gradient(135deg, #0288d1, #26c6da);
        text-align: center;
        color: white;
    }

    .hero-gabung h1 {
        font-size: 3.5rem;
        font-weight: 800;
        margin-bottom: 15px;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
    }

    .hero-gabung p {
        font-size: 1.2rem;
        margin: 0;
        opacity: 0.95;
    }

    /* Section Styling */
    .section-padding {
        padding: 80px 20px;
    }

    .bg-light {
        background: #f8f9fa;
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

    .intro-text {
        max-width: 900px;
        margin: 0 auto 60px;
        text-align: center;
        line-height: 1.8;
        font-size: 1.1rem;
        color: #555;
    }

    /* Grid Cards */
    .grid-two {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 30px;
        max-width: 1100px;
        margin: 0 auto 60px;
    }

    .card-modern {
        background: white;
        padding: 40px;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        transition: transform 0.3s ease;
    }

    .card-modern:hover {
        transform: translateY(-10px);
    }

    .card-modern h3 {
        color: #0288d1;
        font-size: 1.5rem;
        margin-bottom: 20px;
    }

    .card-modern ul {
        list-style: none;
        padding: 0;
    }

    .card-modern li {
        padding: 12px 0;
        border-bottom: 1px solid #e0e0e0;
        line-height: 1.6;
    }

    .card-modern li:last-child {
        border-bottom: none;
    }

    .card-modern li::before {
        content: '✓ ';
        color: #26c6da;
        font-weight: bold;
        margin-right: 10px;
    }

    /* CTA Button */
    .cta-section {
        text-align: center;
        padding: 60px 20px;
        background: linear-gradient(135deg, #0288d1, #26c6da);
        border-radius: 20px;
        color: white;
        margin: 60px auto;
        max-width: 800px;
    }

    .cta-section h2 {
        font-size: 2rem;
        margin-bottom: 20px;
    }

    .cta-section .btn-register {
        background: white;
        color: #0288d1;
        padding: 15px 40px;
        font-size: 1.1rem;
        font-weight: bold;
        border-radius: 50px;
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-block;
        margin-top: 20px;
    }

    .cta-section .btn-register:hover {
        background: #f0f0f0;
        transform: scale(1.05);
    }

    /* Data Form Section */
    .data-section {
        max-width: 900px;
        margin: 0 auto;
        background: white;
        padding: 50px;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }

    .data-section h3 {
        color: #0288d1;
        font-size: 1.8rem;
        margin-bottom: 30px;
    }

    .data-section ul {
        list-style: none;
        padding: 0;
        columns: 2;
        column-gap: 30px;
    }

    .data-section li {
        padding: 12px 0;
        line-height: 1.8;
        break-inside: avoid;
    }

    .data-section li::before {
        content: '▸ ';
        color: #26c6da;
        font-weight: bold;
        margin-right: 10px;
    }

    .note-section {
        background: #f0f8ff;
        padding: 30px;
        border-radius: 15px;
        margin-top: 40px;
        border-left: 5px solid #26c6da;
    }

    .note-section p {
        color: #555;
        line-height: 1.8;
    }
</style>

<!-- Hero Section -->
<div class="hero-gabung">
    <h1>Gabung Menjadi Relawan</h1>
    <p>Bersama kita wujudkan aksi nyata dan kepedulian untuk Indonesia.</p>
</div>

<!-- Main Content -->
<div class="container-fluid section-padding">
    <div class="intro-text">
        <p>
            Bergabung menjadi relawan adalah langkah nyata untuk berkontribusi pada perubahan sosial. 
            Kami membuka kesempatan bagi Anda yang ingin berbagi kepedulian dan keahlian untuk membantu 
            masyarakat yang membutuhkan.
        </p>
    </div>

    <!-- Sebelum dan Sesudah Bergabung -->
    <div class="grid-two">
        <!-- Card 1: Sebelum Bergabung -->
        <div class="card-modern">
            <h3>📋 Sebelum Bergabung</h3>
            <ul>
                <li>Memahami tujuan dan nilai kegiatan relawan yang akan diikuti.</li>
                <li>Memastikan kesediaan waktu dan komitmen selama kegiatan berlangsung.</li>
                <li>Menyiapkan data diri dan kontak yang aktif.</li>
                <li>Menentukan minat dan kemampuan yang dapat dikontribusikan.</li>
            </ul>
        </div>

        <!-- Card 2: Sesudah Bergabung -->
        <div class="card-modern">
            <h3>🎯 Sesudah Bergabung</h3>
            <ul>
                <li>Mengikuti proses verifikasi dan konfirmasi dari tim relawan.</li>
                <li>Mendapatkan informasi terkait jadwal, lokasi, dan pembagian tugas.</li>
                <li>Mengikuti pembekalan atau pengarahan sebelum kegiatan dimulai.</li>
                <li>Berpartisipasi aktif dalam pelaksanaan kegiatan sosial.</li>
                <li>Menjaga etika, tanggung jawab, dan kerja sama selama kegiatan.</li>
            </ul>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="cta-section">
        <h2>Siap Memulai?</h2>
        <p style="font-size: 1.1rem; margin-bottom: 0;">Isi formulir pendaftaran dan jadilah bagian dari tim kami</p>
        <a href="{{ url('/profil') }}" class="btn-register">📝 Daftar Sekarang</a>
    </div>

    <!-- Data Diri Section -->
    <div class="data-section">
        <h3>Data Diri yang Perlu Diisi</h3>
        <p style="color: #666; margin-bottom: 30px;">
            Untuk bergabung menjadi relawan, silakan mengisi formulir pendaftaran dengan data berikut:
        </p>

        <ul>
            <li>Nama Lengkap</li>
            <li>Umur</li>
            <li>Alamat Domisili</li>
            <li>Nomor WhatsApp Aktif</li>
            <li>Alamat Email</li>
            <li>Asal Instansi / Pekerjaan</li>
            <li>Minat dan Keahlian</li>
            <li>Alasan Bergabung Menjadi Relawan</li>
            <li>Pengalaman Organisasi (jika ada)</li>
        </ul>

        <div class="note-section">
            <p>
                <strong>⚠️ Penting:</strong> Pastikan seluruh data yang diisi adalah benar dan dapat dipertanggungjawabkan. 
                Tim kami akan menghubungi relawan yang memenuhi kriteria melalui kontak yang telah diberikan. 
                Proses verifikasi biasanya memakan waktu 3-5 hari kerja.
            </p>
        </div>
    </div>
</div>

@endsection
