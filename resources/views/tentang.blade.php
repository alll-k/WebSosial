@extends('layout.style')
{{-- Pastikan layout.style Anda memiliki @yield('konten') --}}

@section('title', 'Tentang Kami & Donasi')

@section('konten')

<div class="hero-tentang">
    <div class="hero-content">
        <h1>Organisasi Kami</h1>
        <p>Organisasi Sosial yang Peduli dan Aksi Nyata untuk Masyarakat</p>
    </div>
</div>

<section class="intro section-padding">
    <div class="container">
        <div class="intro-content">
            <h2>Siapa Kami?</h2>
            <p>
                Kami adalah organisasi sosial nirlaba yang berdedikasi untuk memberikan dampak positif bagi masyarakat Indonesia.
                Sejak didirikan pada tahun 2012, kami telah melayani lebih dari 5000 penerima manfaat melalui berbagai program sosial,
                pendidikan, kesehatan, dan pemberdayaan ekonomi.
            </p>
            <p>
                Dengan tim relawan yang solid dan dukungan dari berbagai mitra, kami berkomitmen untuk menciptakan perubahan nyata
                di tingkat komunitas. Kami percaya bahwa setiap orang berhak mendapatkan akses pendidikan, kesehatan, dan peluang ekonomi
                yang sama, tanpa memandang latar belakang sosial ekonomi.
            </p>
        </div>
    </div>
</section>

<section class="visi-misi section-padding bg-light">
    <div class="container">
        <h2 class="section-title">Visi & Misi Kami</h2>

        <div class="visi-misi-grid">
            <div class="visi-misi-card">
                <div class="vm-icon">🎯</div>
                <h3>Visi</h3>
                <p>
                    <strong>"Masyarakat Indonesia yang Sejahtera, Mandiri, dan Bermartabat"</strong>
                </p>
                <p class="vm-detail">
                    Kami bermimpi untuk menciptakan masyarakat yang memiliki akses penuh terhadap pendidikan berkualitas,
                    kesehatan yang baik, dan peluang ekonomi yang adil. Semua orang berhak hidup dengan bermartabat dan
                    memiliki kesempatan untuk mengembangkan potensi mereka.
                </p>
            </div>

            <div class="visi-misi-card">
                <div class="vm-icon">💪</div>
                <h3>Misi</h3>
                <ul class="vm-list">
                    <li>✓ Memberikan akses pendidikan berkualitas untuk anak-anak kurang mampu</li>
                    <li>✓ Meningkatkan derajat kesehatan masyarakat melalui layanan kesehatan gratis</li>
                    <li>✓ Memberdayakan ekonomi keluarga melalui pelatihan dan akses modal</li>
                    <li>✓ Menjaga kelestarian lingkungan untuk generasi mendatang</li>
                    <li>✓ Membangun infrastruktur dasar di daerah terpencil</li>
                    <li>✓ Memobilisasi masyarakat dan relawan untuk aksi sosial nyata</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="values section-padding">
    <div class="container">
        <h2 class="section-title">Nilai-Nilai Inti Kami</h2>
        <p class="section-desc">Prinsip-prinsip yang memandu setiap keputusan dan tindakan kami.</p>

        <div class="values-grid">
            <div class="value-card">
                <div class="value-icon">❤️</div>
                <h3>Kepedulian</h3>
                <p>Kami peduli terhadap kesejahteraan setiap individu dalam masyarakat tanpa terkecuali.</p>
            </div>

            <div class="value-card">
                <div class="value-icon">🤝</div>
                <h3>Solidaritas</h3>
                <p>Kami percaya pada kekuatan bersama dan kolaborasi untuk menciptakan perubahan.</p>
            </div>

            <div class="value-card">
                <div class="value-icon">✅</div>
                <h3>Integritas</h3>
                <p>Kami beroperasi dengan transparansi, akuntabilitas, dan kejujuran dalam setiap aspek.</p>
            </div>

            <div class="value-card">
                <div class="value-icon">🌍</div>
                <h3>Keberlanjutan</h3>
                <p>Kami fokus pada solusi jangka panjang yang menguntungkan masyarakat dan lingkungan.</p>
            </div>

            <div class="value-card">
                <div class="value-icon">⚖️</div>
                <h3>Keadilan</h3>
                <p>Kami memperjuangkan akses yang adil dan setara untuk semua lapisan masyarakat.</p>
            </div>

            <div class="value-card">
                <div class="value-icon">🚀</div>
                <h3>Inovasi</h3>
                <p>Kami terus mencari cara-cara baru dan kreatif untuk meningkatkan dampak sosial kami.</p>
            </div>
        </div>
    </div>
</section>

<section class="section-donasi section-padding bg-light" id="donasi">
    <div class="container text-center">
        <h2 class="section-title">Beri Dukungan, Ciptakan Perubahan</h2>
        <p class="section-desc">Satu donasi Anda, ribuan harapan yang terwujud. Pilih program yang paling menyentuh hati Anda.</p>
        <a href="#metode-pembayaran-donasi" class="btn btn-action-donasi mt-3">Langkah Cepat Berdonasi</a>

        <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
            {{-- Kartu Program 1: Pendidikan --}}
            <div class="col">
                <div class="program-card">
                    <div class="card-icon">🎓</div>
                    <h5 class="card-title">Beasiswa Anak Bangsa</h5>
                    <p class="card-text">Dukungan dana untuk memastikan anak-anak kurang mampu dapat terus bersekolah.</p>
                    <div class="progress-bar-container">
                        <div class="progress-label">Terkumpul: **Rp 125.000.000** dari Rp 200.000.000</div>
                        <div class="progress">
                            <div class="progress-bar" style="width: 62.5%;"></div>
                        </div>
                    </div>
                    <button class="btn btn-donasi-inner" data-program="Beasiswa">Donasi Sekarang</button>
                </div>
            </div>

            {{-- Kartu Program 2: Kesehatan --}}
            <div class="col">
                <div class="program-card">
                    <div class="card-icon">🩺</div>
                    <h5 class="card-title">Kesehatan Gratis Masyarakat Desa</h5>
                    <p class="card-text">Penyediaan layanan kesehatan, obat-obatan, dan pemeriksaan gratis di daerah terpencil.</p>
                    <div class="progress-bar-container">
                        <div class="progress-label">Terkumpul: **Rp 85.000.000** dari Rp 100.000.000</div>
                        <div class="progress">
                            <div class="progress-bar" style="width: 85%;"></div>
                        </div>
                    </div>
                    <button class="btn btn-donasi-inner" data-program="Kesehatan">Donasi Sekarang</button>
                </div>
            </div>

            {{-- Kartu Program 3: Lingkungan --}}
            <div class="col">
                <div class="program-card">
                    <div class="card-icon">🌳</div>
                    <h5 class="card-title">Gerakan Tanam 50.000 Pohon</h5>
                    <p class="card-text">Aksi nyata untuk menjaga kelestarian alam dan mengurangi dampak perubahan iklim.</p>
                    <div class="progress-bar-container">
                        <div class="progress-label">Terkumpul: **Rp 45.000.000** dari Rp 75.000.000</div>
                        <div class="progress">
                            <div class="progress-bar" style="width: 60%;"></div>
                        </div>
                    </div>
                    <button class="btn btn-donasi-inner" data-program="Lingkungan">Donasi Sekarang</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="metode-pembayaran-donasi" class="section-pembayaran section-padding">
    <div class="container">
        <h2 class="section-title text-center">Metode Pembayaran Donasi</h2>

        <div class="row mt-5">
            {{-- Transfer Bank --}}
            <div class="col-md-6 mb-4">
                <div class="payment-card">
                    <h4 class="card-header"><i class="fa fa-university me-2"></i> Transfer Bank</h4>
                    <div class="card-body">
                        <div class="bank-item">
                            <h5 class="bank-name">BANK CENTRAL ASIA (BCA)</h5>
                            <p class="bank-account">No. Rekening: **123-456-7890**</p>
                            <p class="bank-name">Atas Nama: Yayasan Web Sosial Indonesia</p>
                            <button class="btn btn-copy" data-clipboard-text="1234567890">Salin Nomor Rekening</button>
                        </div>
                        <hr>
                        <div class="bank-item">
                            <h5 class="bank-name">BANK MANDIRI</h5>
                            <p class="bank-account">No. Rekening: **987-654-3210**</p>
                            <p class="bank-name">Atas Nama: Yayasan Web Sosial Indonesia</p>
                            <button class="btn btn-copy" data-clipboard-text="9876543210">Salin Nomor Rekening</button>
                        </div>
                        <p class="mt-3 info-text">
                            *Mohon tambahkan kode unik 100 di belakang nominal donasi Anda (misal: Rp 100.100)
                            untuk mempermudah kami mendata donasi Anda.
                        </p>
                    </div>
                </div>
            </div>

            {{-- E-Wallet & Lainnya --}}
            <div class="col-md-6 mb-4">
                <div class="payment-card">
                    <h4 class="card-header"><i class="fa fa-qrcode me-2"></i> QRIS & E-Wallet</h4>
                    <div class="card-body text-center">
                        <img src="https://via.placeholder.com/300x300?text=QRIS+CODE" alt="QRIS Code" class="img-fluid qris-img">
                        <p class="mt-3 info-text fw-bold">Scan kode QRIS di atas menggunakan:</p>
                        <div class="e-wallet-icons">
                            <span class="icon-label">OVO</span>
                            <span class="icon-label">GoPay</span>
                            <span class="icon-label">Dana</span>
                            <span class="icon-label">LinkAja</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="alert alert-info mt-5 text-center">
            <h4 class="alert-heading">Penting! Konfirmasi Donasi</h4>
            <p>
                Setelah melakukan transfer, mohon konfirmasi donasi Anda melalui link <a href="https://wa.me/628xxx" target="_blank" class="fw-bold">WhatsApp Resmi Kami</a>
                dengan format: **Donasi # Nama # Nominal # Tanggal Transfer**.
            </p>
            <p class="mb-0">Kami menjamin 100% donasi Anda disalurkan secara transparan.</p>
        </div>
    </div>
</section>

<section class="sejarah section-padding bg-light">
    <div class="container">
        <h2 class="section-title">Perjalanan Kami</h2>
        <p class="section-desc">Dari awal yang sederhana hingga menjadi organisasi sosial terpercaya.</p>

        <div class="timeline">
            {{-- Timeline Items --}}
            <div class="timeline-item">
                <div class="timeline-marker">
                    <div class="timeline-dot active"></div>
                </div>
                <div class="timeline-content">
                    <h3>2024 - Tahun Ini & Masa Depan</h3>
                    <p>
                        Dengan 156 relawan aktif dan dukungan berbagai mitra, kami terus berinovasi untuk menciptakan dampak
                        sosial yang lebih besar. Visi kami untuk 2025 adalah mencapai 10,000+ penerima manfaat.
                    </p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker">
                    <div class="timeline-dot"></div>
                </div>
                <div class="timeline-content">
                    <h3>2023 - Konsolidasi & Ekspansi</h3>
                    <p>
                        Kami resmi terdaftar sebagai yayasan dan memperluas jangkauan ke 15 kota. Program lingkungan ditambahkan
                        dengan target menanam 50,000 pohon dalam 2 tahun.
                    </p>
                </div>
            </div>
            {{-- ... Tambahkan item timeline lainnya di sini (2020, 2018, 2016, 2014, 2012) ... --}}
        </div>
    </div>
</section>

<section class="team section-padding">
    <div class="container">
        <h2 class="section-title">Tim Kepemimpinan Kami</h2>
        <p class="section-desc">Orang-orang berdedikasi di balik setiap program sosial kami.</p>

        <div class="team-grid">
            {{-- Team Cards --}}
            <div class="team-card">
                <div class="team-image">👨‍💼</div>
                <h3>Hendra Wijaya</h3>
                <p class="team-role">Pendiri & Ketua Eksekutif</p>
                <p class="team-bio">
                    Pendiri organisasi ini dengan pengalaman 15+ tahun di bidang pengembangan masyarakat.
                </p>
            </div>
            <div class="team-card">
                <div class="team-image">👩‍💼</div>
                <h3>Siti Nurhaliza</h3>
                <p class="team-role">Kepala Program Pendidikan</p>
                <p class="team-bio">
                    Pendidik berpengalaman dengan passion untuk memberikan akses pendidikan berkualitas.
                </p>
            </div>
            {{-- ... Tambahkan card tim lainnya di sini ... --}}
        </div>
    </div>
</section>

<section class="achievement section-padding bg-light">
    <div class="container">
        <h2 class="section-title">Pencapaian & Pengakuan</h2>
        <div class="achievement-grid">
            {{-- Achievement Cards --}}
            <div class="achievement-card">
                <div class="achievement-number">5,247</div>
                <p>Penerima Manfaat Langsung</p>
            </div>
            <div class="achievement-card">
                <div class="achievement-number">156</div>
                <p>Relawan Aktif</p>
            </div>
            {{-- ... Tambahkan card pencapaian lainnya di sini ... --}}
            <div class="achievement-card">
                <div class="achievement-number">12</div>
                <p>Tahun Berkontribusi</p>
            </div>
        </div>
        <div class="awards-section">
            <h3 class="awards-title">Penghargaan & Sertifikasi</h3>
            <ul class="awards-list">
                <li>🏆 Penghargaan CSR Terbaik dari Pemerintah Kota Bandung (2022)</li>
                <li>🏆 Terdaftar di KEMENSOS sebagai Organisasi Sosial Berbadan Hukum (2023)</li>
            </ul>
        </div>
    </div>
</section>

<section class="faq section-padding">
    <div class="container">
        <h2 class="section-title">Pertanyaan yang Sering Diajukan</h2>

        <div class="faq-grid">
            <div class="faq-item">
                <h3 class="faq-question">❓ Bagaimana cara bergabung sebagai relawan?</h3>
                <p class="faq-answer">Anda dapat mendaftar melalui website kami. Kami menyediakan pelatihan relawan gratis untuk semua peserta baru.</p>
            </div>
            <div class="faq-item">
                <h3 class="faq-question">❓ Bagaimana cara berdonasi untuk organisasi kami?</h3>
                <p class="faq-answer">
                    Anda dapat berdonasi melalui transfer bank (lihat bagian Metode Pembayaran di atas) atau melalui QRIS/E-Wallet. Semua donasi akan digunakan sesuai tujuan yang Anda inginkan.
                </p>
            </div>
            <div class="faq-item">
                <h3 class="faq-question">❓ Apakah 100% Donasi disalurkan?</h3>
                <p class="faq-answer">Ya, kami menjamin 100% dana donasi yang Anda berikan dialokasikan langsung untuk program yang Anda pilih. Biaya operasional yayasan ditanggung oleh dukungan terpisah dari mitra korporasi.</p>
            </div>
            <div class="faq-item">
                <h3 class="faq-question">❓ Bagaimana transparansi keuangan organisasi kami?</h3>
                <p class="faq-answer">Kami transparan dalam penggunaan dana. Laporan keuangan tahunan kami diaudit oleh pihak ketiga dan dapat diakses oleh publik.</p>
            </div>
        </div>
    </div>
</section>

<section class="cta section-padding">
    <div class="container">
        <div class="cta-content">
            <h2>Mari Bersama Menciptakan Perubahan</h2>
            <p>Anda bisa berkontribusi dengan cara yang paling sesuai dengan Anda.</p>

            <div class="cta-buttons">
                <a href="{{ url('/daftar-relawan') }}" class="btn btn-primary">Jadilah Relawan</a>
                <a href="#donasi" class="btn btn-secondary">Berdonasi</a>
            </div>
        </div>
    </div>
</section>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #2d3748;
        line-height: 1.6;
    }

    :root {
        --primary-color: #667eea;
        --secondary-color: #764ba2;
        --text-color: #2d3748;
        --bg-light: #f7fafc;
    }

    .container {
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 20px;
    }

    /* HERO */
    .hero-tentang {
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
        color: white;
        padding: 80px 20px;
        text-align: center;
        min-height: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .hero-content h1 {
        font-size: 3rem;
        margin-bottom: 15px;
        font-weight: 700;
    }

    .hero-content p {
        font-size: 1.2rem;
        opacity: 0.95;
    }

    /* SECTIONS GENERAL */
    .section-padding {
        padding: 80px 20px;
    }

    .section-title {
        font-size: 2.5rem;
        text-align: center;
        margin-bottom: 15px;
        font-weight: 700;
        color: var(--text-color);
    }

    .section-desc {
        text-align: center;
        font-size: 1.05rem;
        color: #718096;
        margin-bottom: 50px;
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
    }

    .bg-light {
        background: var(--bg-light);
    }

    /* INTRO */
    .intro-content {
        max-width: 800px;
        margin: 0 auto;
        text-align: center;
    }

    .intro-content h2 {
        font-size: 2.2rem;
        margin-bottom: 25px;
        color: var(--text-color);
    }

    .intro-content p {
        font-size: 1.05rem;
        color: #718096;
        line-height: 1.8;
        margin-bottom: 20px;
    }

    /* VISI MISI */
    .visi-misi-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 40px;
        margin-top: 50px;
    }

    .visi-misi-card {
        background: white;
        padding: 40px;
        border-radius: 12px;
        border: 1px solid #e2e8f0;
        transition: all 0.3s ease;
        text-align: center;
    }

    .visi-misi-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 40px rgba(102, 126, 234, 0.15);
    }

    .vm-icon {
        font-size: 3.5rem;
        margin-bottom: 20px;
    }

    .visi-misi-card h3 {
        font-size: 1.8rem;
        margin-bottom: 20px;
        color: var(--primary-color);
    }

    .vm-list {
        list-style: none;
        text-align: left;
    }

    .vm-list li {
        padding: 10px 0;
        color: #718096;
        line-height: 1.8;
        font-size: 0.95rem;
    }

    /* VALUES */
    .values-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
    }

    .value-card {
        background: white;
        padding: 30px;
        border-radius: 12px;
        border: 1px solid #e2e8f0;
        text-align: center;
        transition: all 0.3s ease;
    }

    .value-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(102, 126, 234, 0.15);
        border-color: var(--primary-color);
    }

    .value-icon {
        font-size: 2.5rem;
        margin-bottom: 15px;
    }

    .value-card h3 {
        font-size: 1.3rem;
        margin-bottom: 10px;
        color: var(--text-color);
    }

    .value-card p {
        color: #718096;
        font-size: 0.95rem;
    }

    /* SEJARAH (TIMELINE) */
    .timeline {
        position: relative;
        padding: 20px 0;
    }

    .timeline::before {
        content: '';
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        width: 3px;
        height: 100%;
        background: linear-gradient(to bottom, var(--primary-color), var(--secondary-color));
    }

    .timeline-item {
        margin-bottom: 40px;
        position: relative;
    }

    .timeline-item:nth-child(odd) .timeline-content {
        margin-left: 0;
        margin-right: 52%;
        text-align: right;
    }

    .timeline-item:nth-child(even) .timeline-content {
        margin-left: 52%;
        margin-right: 0;
        text-align: left;
    }

    .timeline-marker {
        position: absolute;
        left: 50%;
        top: 0;
        transform: translateX(-50%);
        z-index: 10;
    }

    .timeline-dot {
        width: 20px;
        height: 20px;
        background: white;
        border: 4px solid var(--primary-color);
        border-radius: 50%;
        display: block;
    }

    .timeline-dot.active {
        background: var(--primary-color);
        box-shadow: 0 0 0 8px rgba(102, 126, 234, 0.1);
    }

    .timeline-content h3 {
        font-size: 1.3rem;
        margin-bottom: 10px;
        color: var(--text-color);
        font-weight: 600;
    }

    /* TEAM */
    .team-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
    }

    .team-card {
        background: white;
        padding: 30px;
        border-radius: 12px;
        border: 1px solid #e2e8f0;
        text-align: center;
        transition: all 0.3s ease;
    }

    .team-image {
        font-size: 4rem;
        margin-bottom: 15px;
    }

    .team-role {
        color: var(--primary-color);
        font-weight: 600;
        margin-bottom: 15px;
    }

    /* ACHIEVEMENT */
    .achievement-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 20px;
        margin-bottom: 50px;
    }

    .achievement-card {
        background: white;
        padding: 25px;
        border-radius: 12px;
        border: 1px solid #e2e8f0;
        text-align: center;
        transition: all 0.3s ease;
    }

    .achievement-number {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--primary-color);
        margin-bottom: 10px;
    }

    /* DONASI SPECIFIC STYLES */
    .btn-action-donasi {
        background-color: var(--primary-color);
        color: white;
        padding: 12px 30px;
        border-radius: 50px;
        font-weight: 600;
        transition: all 0.3s ease;
        border: 2px solid var(--primary-color);
        text-decoration: none; /* Make it look like button */
    }

    .btn-action-donasi:hover {
        background-color: var(--secondary-color);
        border-color: var(--secondary-color);
    }

    .program-card {
        background: white;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        border: 1px solid #e2e8f0;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        transition: transform 0.3s;
    }

    .program-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 8px 25px rgba(102, 126, 234, 0.15);
    }

    .progress-bar-container {
        margin-top: 15px;
        margin-bottom: 20px;
    }

    .progress-label {
        font-size: 0.85rem;
        color: var(--primary-color);
        margin-bottom: 5px;
        font-weight: 600;
    }

    .progress {
        height: 8px;
        background-color: #e9ecef;
        border-radius: 4px;
        overflow: hidden;
    }

    .progress-bar {
        background-color: var(--primary-color);
    }

    .btn-donasi-inner {
        background-color: var(--primary-color);
        color: white;
        padding: 8px 20px;
        border-radius: 50px;
        font-weight: 600;
        width: 100%;
        border: none;
        transition: background-color 0.3s;
    }

    .btn-donasi-inner:hover {
        background-color: var(--secondary-color);
    }

    /* PAYMENT METHODS */
    .section-pembayaran .section-title {
        color: var(--primary-color);
    }

    .payment-card {
        background: white;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        height: 100%;
    }

    .payment-card .card-header {
        background: var(--primary-color);
        color: white;
        padding: 15px 25px;
        font-size: 1.2rem;
        font-weight: 600;
        border-bottom: none;
    }

    .bank-account {
        font-size: 1.5rem;
        font-weight: 800;
        color: var(--primary-color);
        margin-bottom: 10px;
    }

    .btn-copy {
        background-color: #f7fafc;
        color: var(--primary-color);
        border: 1px solid var(--primary-color);
        padding: 5px 15px;
        border-radius: 5px;
        font-size: 0.9rem;
        transition: all 0.2s;
    }

    .qris-img {
        max-width: 250px;
        height: auto;
        border: 5px solid #e2e8f0;
        border-radius: 10px;
    }

    .e-wallet-icons .icon-label {
        display: inline-block;
        background: #e6fffa;
        color: #38b2ac;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 0.85rem;
        font-weight: 600;
        margin: 5px;
    }

    /* CTA BUTTONS */
    .btn {
        display: inline-block;
        padding: 12px 28px;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        border: 2px solid transparent;
        cursor: pointer;
    }

    .btn-primary {
        background: white;
        color: var(--primary-color);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .btn-secondary {
        background: transparent;
        color: white;
        border: 2px solid white;
    }

    /* RESPONSIVE */
    @media (max-width: 768px) {
        /* ... (responsive styles dari kode sebelumnya) ... */
    }
</style>

@endsection