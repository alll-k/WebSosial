@extends ('layout.style')

@section ('konten')
<body>

    <section class="slider-container">
        <div class="slider-wrapper">
            
            <div class="slide current-slide" data-index="1">
                <img src="{{ asset('images/gambar_1.jpg') }}" alt="Mahalkan Rokok"> 
                <div class="overlay"></div>
                <div class="slide-content">
                    <h1>Mahalkan Rokok! Selamatkan Nyawa 268.000 Orang Setiap Tahunnya</h1>
                    <p>Lempeng kebijakan cukai rokok membuat banyak rumah tangga di Indonesia lebih banyak menghabiskan uang belanja untuk rokok. Anak jadi kekurangan gizi, stunting tetap tinggi, dan 268.000 nyawa melayang sia-sia setiap tahun.</p>
                    <a href="#" class="cta-button">Lihat Selengkapnya</a>
                </div>
            </div>

            <div class="slide" data-index="2">
                <img src="{{ asset('images/gambar 2.jpg') }}" alt="Sistem Kesehatan"> 
                <div class="overlay"></div>
                <div class="slide-content">
                    <h1>Penguatan Sistem Kesehatan Primer</h1>
                    <p>CISDI berfokus pada penguatan sistem kesehatan primer untuk menjamin akses layanan yang adil dan merata bagi seluruh masyarakat Indonesia.</p>
                    <a href="#" class="cta-button">Baca Riset</a>
                </div>
            </div>

            <div class="slide" data-index="3">
                <img src="{{ asset('images/gambar 3.jpg') }}" alt="Ibu dan Anak"> 
                <div class="overlay"></div>
                <div class="slide-content">
                    <h1>Prioritas Kesehatan Ibu dan Anak</h1>
                    <p>Program kami didedikasikan untuk menurunkan angka kematian ibu dan bayi serta mengatasi masalah stunting melalui intervensi berbasis komunitas.</p>
                    <a href="#" class="cta-button">Lihat Program</a>
                </div>
            </div>

        </div>

        <button class="slider-btn prev-btn">
            <span class="arrow">❮</span>
        </button>
        <button class="slider-btn next-btn">
            <span class="arrow">❯</span>
        </button>

        <div class="slider-dots">
            <div class="dot active-dot" data-slide-to="1"></div>
            <div class="dot" data-slide-to="2"></div>
            <div class="dot" data-slide-to="3"></div>
        </div>
    </section><br>

    <section class="expertise-section">
    <h2>Apa saja yang kami lakukan?</h2>
    
    <div class="expertise-container">
        
        <div class="expertise-card">
            <img src="https://images.unsplash.com/photo-1517866367358-1a7337a6b72a?auto=format&fit=crop&q=80&w=2070" alt="Poverty Analysis" loading="lazy">
            <div class="expertise-text">
                <h3>Menyelenggarakan kegiatan dan program sosial.</h3>
                <p>Kegiatan dan program sosial merupakan upaya untuk meningkatkan kesejahteraan dan kualitas hidup masyarakat. 
                Dengan berpartisipasi, Anda turut menciptakan lingkungan yang lebih inklusif dan berdaya, serta mendorong terwujudnya perubahan positif bagi semua.</p>
            </div>
        </div>
        
        <div class="expertise-card">
            <img src="https://images.unsplash.com/photo-1522204523234-8729aa6e3d5f?auto=format&fit=crop&q=80&w=2070" alt="Policy Research" loading="lazy">
            <div class="expertise-text">
                <h3>Mendukung lembaga atau usaha di bidang kesehatan.</h3>
                <p>Mendukung lembaga kesehatan berarti ikut memperkuat pelayanan yang berkualitas dan mudah diakses,
                sehingga meningkatkan kesehatan dan kesejahteraan masyarakat.</p>
            </div>
        </div>
        
        <div class="expertise-card">
            <img src="https://images.unsplash.com/photo-1549416569-42b47594d4d1?auto=format&fit=crop&q=80&w=2070" alt="Monitoring and Evaluation" loading="lazy">
            <div class="expertise-text">
                <h3>Kaji berbagai permasalahan sosial serta melakukan evaluasi berkelanjutan</h3>
                <p>Kaji permasalahan sosial dan mengevaluasi kinerja tim secara berkelanjutan memastikan solusi yang dihasilkan lebih tepat, efektif, dan bermanfaat bagi masyarakat.</p>
            </div>
        </div>
        
    </div>
</section>

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

    <a href="/daftar"
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

<section class="mitra-section">
    <h2>Mitra Kami</h2>
    
    <div class="mitra-logos">
        <div class="mitra-logo-item">
            <img src="https://cisdi.org/wp-content/uploads/2021/08/Gavi_logo_web.png" alt="Gavi">
        </div>
        <div class="mitra-logo-item">
            <img src="https://cisdi.org/wp-content/uploads/2021/08/Global-Fund.png" alt="The Global Fund" loading="lazy">
        </div>
        <div class="mitra-logo-item">
            <img src="https://cisdi.org/wp-content/uploads/2021/08/Community_Health_Impact_Coalition.png" alt="CHIC" loading="lazy">
        </div>
        <div class="mitra-logo-item">
            <img src="https://cisdi.org/wp-content/uploads/2021/08/Co-Impact.png" alt="Co-Impact" loading="lazy">
        </div>
        <div class="mitra-logo-item">
            <img src="https://cisdi.org/wp-content/uploads/2021/08/Chatham-House.png" alt="Chatham House" loading="lazy">
        </div>
        <div class="mitra-logo-item">
            <img src="https://cisdi.org/wp-content/uploads/2021/08/makin-bisa-lagi.png" alt="Makin Bisa Lagi" loading="lazy">
        </div>
        <div class="mitra-logo-item">
            <img src="https://cisdi.org/wp-content/uploads/2021/08/bloomberg-philantrophies.png" alt="Bloomberg Philantrophies" loading="lazy">
        </div>
        <div class="mitra-logo-item">
            <img src="https://cisdi.org/wp-content/uploads/2021/08/bill-melinda-gates.png" alt="Bill & Melinda Gates Foundation" loading="lazy">
        </div>
    </div>
    
    <a href="#" class="detail-link">Lihat Detail →</a>

@endsection