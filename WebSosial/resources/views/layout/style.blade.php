<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Website Relawan')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
    
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0; padding: 0;
        background-color: #f8f8f8;
        color: #333;
    }

    .program-banner {
    width: 100%;
    height: 350px; 
    margin-bottom: 40px; 
    overflow: hidden;
    position: relative;
    border-radius: 15px; 
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.program-banner img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: brightness(85%); 
}

.banner-text {
    position: absolute;
    top: 50%;
    left: 5%;
    transform: translateY(-50%);
    color: white;
    text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.8);
    text-align: left;
}

.banner-text h1 {
    font-size: 3em;
    font-weight: 700;
    margin: 0;
}

/* PERBAIKAN NAVIGASI: Hilangkan Jeda & Besarkan Logo */
.cisdi-header {
    display: flex !important;
    justify-content: space-between !important;
    align-items: center !important;
    padding: 10px 30px !important;
    background-color: rgba(0, 0, 0, 0.7) !important; /* Transparansi agar menyatu */
    position: fixed !important; /* Fixed agar menempel di atas foto */
    width: 100% !important;
    top: 0 !important;
    left: 0 !important;
    z-index: 9999 !important;
    backdrop-filter: blur(10px);
}

.cisdi-header .logo {
    font-size: 32px !important; /* Ukuran RELAWAN diperbesar */
    font-weight: bold;
    color: white;
}

.cisdi-header .logo a {
    text-decoration: none !important;
    color: white !important;
}

.cisdi-header .logo span {
    color: #26c6da; 
}

.cisdi-header nav ul {
    list-style: none !important;
    display: flex !important;
    margin: 0 !important;
    padding: 0 !important;
    gap: 15px !important;
}

.cisdi-header nav ul li a {
    text-decoration: none !important;
    color: white !important;
    font-size: 14px !important;
    font-weight: 500 !important;
    transition: color 0.3s;
}

.cisdi-header nav ul li a:hover {
    color: #26c6da !important;
}

.donasi-btn {
    background-color: #0288d1; 
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 3px;
    cursor: pointer;
    font-weight: bold;
    font-size: 14px;
    white-space: nowrap;
}

.donasi-btn a {
    color: white !important;
    text-decoration: none !important;
}

.donasi-btn:hover {
    background-color: #00acc1; 
}

    /* CAROUSEL/SLIDER STYLES */
    .slider-container {
        position: relative;
        width: 100%;
        height: 100vh; 
        overflow: hidden; 
        margin-bottom: 0; 
        margin-top: 0 !important; /* Memastikan tidak ada jeda atas */
    }

    /* PERBAIKAN JEDA: Konten wrapper tidak diberi margin-top agar foto masuk ke bawah nav */
    .content-wrapper {
        margin-top: 0 !important; 
        padding: 0 !important;
    }

    .slider-wrapper {
        display: flex;
        height: 100%;
    }

    .slide {
        min-width: 100%; 
        height: 100%;
        position: relative;
        display: none; 
    }

    .slide.current-slide {
        display: block; 
    }

    .slide img {
        width: 100%;
        height: 100%;
        object-fit: cover; 
        filter: brightness(80%);
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.1); 
    }

    .slide-content {
        position: absolute;
        bottom: 15%;
        left: 5%;
        width: 90%;
        max-width: 700px;
        color: white;
        z-index: 5;
        text-shadow: 1px 1px 3px rgba(0,0,0,0.6);
    }

    .slide-content h1 {
        font-size: 3em;
        margin-bottom: 20px;
        font-weight: 700;
    }

    .slide-content p {
        font-size: 1.1em;
        margin-bottom: 30px;
        line-height: 1.5;
        max-width: 90%;
    }

    .cta-button {
        background-color: #0288d1; 
        color: white;
        padding: 15px 30px;
        border-radius: 3px;
        font-weight: bold;
        display: inline-block;
        transition: background-color 0.3s;
        text-decoration: none; 
    }

    .cta-button:hover {
        background-color: #00acc1; 
    }

    /* Tombol Geser (Panah) */
    .slider-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255, 255, 255, 0.2);
        border: 1px solid rgba(255, 255, 255, 0.5);
        color: white;
        font-size: 30px;
        line-height: 1;
        cursor: pointer;
        padding: 10px 15px;
        border-radius: 50%;
        transition: background 0.3s;
        z-index: 50;
        height: 50px;
        width: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .prev-btn {
        left: 20px;
    }

    .next-btn {
        right: 20px;
    }

    .slider-btn:hover {
        background: rgba(255, 255, 255, 0.5);
    }

    /* Indikator Dots */
    .slider-dots {
        position: absolute;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 10px;
        z-index: 50;
    }

    .dot {
        width: 10px;
        height: 10px;
        background-color: rgba(255, 255, 255, 0.5);
        border-radius: 50%;
        cursor: pointer;
    }

    .dot.active-dot {
        background-color: #26c6da; 
    }
    
    .content {
        min-height: 70vh;
        padding: 40px 20px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .hero {
        width: 100%;
        text-align: center;
        padding: 60px 20px;
        background: linear-gradient(135deg, #0288d1, #26c6da);
        border-radius: 15px;
        color: #fff;
        margin-bottom: 20px;
        box-shadow: 0 6px 15px rgba(0,0,0,0.1);
    }

    .hero h1 {
        font-size: 42px;
        margin-bottom: 10px;
        font-weight: 700;
        letter-spacing: 0.5px;
    }

    .hero p {
        font-size: 18px;
        opacity: 0.95;
        margin-bottom: 20px;
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
    }

    .tombol {
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
    }

    .hero a.btn {
        display: inline-block;
        padding: 12px 24px;
        background: #fff;
        color: #0288d1;
        font-weight: bold;
        border-radius: 30px;
        text-decoration: none;
        transition: 0.3s;
        box-shadow: 0 4px 8px rgba(255,255,255,0.25);
    }

    .hero a.btn:hover {
        background: #ffeb3b;
        color: #000;
    }
    

    #layanan h2, .tentang h2, .kontak h2 {
        text-align: center;
        font-size: 30px;
        color: #0277bd;
        margin-bottom: 25px;
        font-weight: 700;
    }

   .cards {
        display: flex;
        justify-content: center;
        gap: 15px;
        flex-wrap: wrap;
    }

    .card {
        background: #fff;
        padding: 25px;
        width: 290px;
        border-radius: 20px; 
        box-shadow: 0 4px 10px rgba(0,0,0,0.08);
        text-align: center;
        transition: 0.3s;
        border: 2px solid #e0f7fa;
    }

    .card:hover {
        transform: translateY(-6px);
        box-shadow: 0 6px 14px rgba(0,0,0,0.12);
    }

    .card h3 {
        color: #00838f;
        font-size: 22px;
        margin-bottom: 10px;
    }

    .card p {
        font-size: 15px;
        line-height: 1.5;
        color: #555;
    }

    .card .btn-secondary {
        margin-top: 15px;
        display: inline-block;
        padding: 10px 20px;
        background: #00acc1;
        color: #fff;
        border-radius: 25px;
        text-decoration: none;
        font-weight: 600;
        transition: 0.3s;
    }
 
        .kolom {
        background: #ffffff;
        margin-top: 40px;
        padding: 35px 20px;
        border-radius: 15px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.07);
        transition: all 0.35s ease;
    }

    .kolom h2{
        text-align: center;
        max-width: 750px;
        margin: auto;
        font-size: 30px;
        line-height: 1.6;
        color: #0277bd;
        font-weight: 500;
    }

    .kolom h3 {
        text-align: center;
        max-width: 750px;
        margin: auto;
        font-size: 25px;
        line-height: 1.6;
        color: #00acc1;
        font-weight: 500;
    }

    .kolom p {
        text-align: center;
        max-width: 750px;
        margin: auto;
        font-size: 17px;
        line-height: 1.6;
        color: #222;
        font-weight: 500;
    }

    .kolom:hover {
        transform: translateY(-6px);
        box-shadow: 0 6px 14px rgba(0,0,0,0.12);
    }

    .card .btn-secondary:hover {
        background: #ffe082;
        color: #000;
    }

    .scroll {
        text-align: center;
        padding: 60px 20px;
        background: linear-gradient(135deg, #0288d1, #26c6da); 
        border-radius: 15px;
        color: #fff;
        margin-bottom: 40px;
        box-shadow: 0 6px 15px rgba(0,0,0,0.1);
        max-height: 600px;    
        overflow-y: auto;  
        padding-right: 10px;
        position: relative; 
    }

    .zoom-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        background: rgba(255, 255, 255, 0.9);
        color: #0288d1;
        border: none;
        padding: 8px 15px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
        font-weight: bold;
        z-index: 10;
    }
    
    footer {
        background: #0288d1;
        text-align: center;
        padding: 15px;
        font-size: 14px;
        color: #fff;
        margin-top: 40px;
    }

.mitra-section {
    padding: 60px 20px;
    background-color: white; 
    text-align: center;
}

.mitra-section h2 {
    font-size: 36px;
    font-weight: 700;
    color: #333;
    margin-bottom: 40px;
}

.mitra-logos {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 30px;
    max-width: 1200px;
    margin: 0 auto;
    overflow-x: auto; 
    padding: 10px 0;
}

.mitra-logo-item {
    min-width: 150px; 
    height: 80px;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px;
    border-radius: 8px;
    transition: transform 0.3s, box-shadow 0.3s;
}

.mitra-logo-item img {
    max-width: 100%;
    max-height: 100%;
    filter: grayscale(100%); 
    opacity: 0.6;
    transition: filter 0.3s, opacity 0.3s;
}

.mitra-logo-item:hover img {
    filter: grayscale(0%); 
    opacity: 1;
}

.detail-link {
    display: inline-block;
    color: #0288d1; 
    text-decoration: none;
    font-weight: 600;
    margin-top: 30px;
    font-size: 16px;
}

/* BERLANGGANAN NAWALA SECTION */
.newsletter-section {
    background-color: #7b1fa2; 
    background-image: linear-gradient(135deg, #1e88e5 0%, #00acc1 100%); 
    color: white;
    padding: 50px 20px;
    text-align: left;
}

.newsletter-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    flex-wrap: wrap; 
}

.newsletter-text h3 {
    font-size: 28px;
    font-weight: 700;
    margin-bottom: 10px;
}

.newsletter-form {
    display: flex;
    gap: 10px;
}

.newsletter-form input[type="email"] {
    padding: 12px 15px;
    border: none;
    border-radius: 4px;
    width: 250px;
    font-size: 16px;
}

.newsletter-form button {
    background-color: #0288d1; 
    color: white;
    border: none;
    padding: 12px 20px;
    border-radius: 4px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s;
}

.newsletter-form button:hover {
    background-color: #00acc1; 
}

@media (max-width: 768px) {
    .newsletter-content {
        flex-direction: column;
        text-align: center;
    }
    .newsletter-text {
        margin-bottom: 20px;
    }
    .newsletter-form {
        width: 100%;
        justify-content: center;
    }
    .newsletter-form input[type="email"] {
        width: 60%;
    }
}

.expertise-section {
    padding: 60px 20px;
    background-color: #f0f8ff; 
    text-align: center;
}

.expertise-section h2 {
    font-size: 32px;
    font-weight: 700;
    color: #0277bd; 
    text-transform: uppercase;
    margin-bottom: 50px;
    letter-spacing: 1px;
}

.expertise-container {
    display: flex;
    justify-content: center;
    gap: 30px;
    max-width: 1200px;
    margin: 0 auto;
    flex-wrap: wrap; 
}

.expertise-card {
    flex: 1 1 300px; 
    background: white;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, box-shadow 0.3s;
    text-align: left;
}

.expertise-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
}

.expertise-card img {
    width: 100%;
    height: 200px; 
    object-fit: cover;
}

.expertise-text {
    padding: 20px;
}

.expertise-text h3 {
    font-size: 20px;
    font-weight: 600;
    color: #00acc1; 
    margin-bottom: 15px;
    min-height: 50px; 
}

.expertise-text p {
    font-size: 14px;
    line-height: 1.6;
    color: #555;
}

@media (max-width: 992px) {
    .expertise-card {
        flex: 1 1 45%; 
        margin-bottom: 20px;
    }
}
@media (max-width: 600px) {
    .expertise-card {
        flex: 1 1 100%; 
    }
}

    </style>
</head>
<body>

<header class="cisdi-header">
    <div class="logo">
        <a href="{{ url('/') }}">RELAWAN<span>+</span></a>
    </div>
    <nav>
        <ul>
            <li><a href="{{ url('/tentang') }}">Tentang Kami</a></li>
            <li><a href="{{ url('/prokegi') }}">Program dan Kegiatan Kami</a></li>
            
            {{-- 1. HANYA UNTUK TAMU (GUEST) --}}
            @guest
                <li><a href="{{ url('/') }}">Bergabung dengan Kami</a></li>
            @endguest

            {{-- 2. HANYA UNTUK ADMIN (ROLE 1) --}}
            @auth
                @if(Auth::user()->role == 1)
                    <li><a href="{{ url('/admin/dashboard') }}" style="color: #ffeb3b; font-weight: bold;">🛠️ Panel Kendali</a></li>
                @endif
            @endauth

            {{-- 3. HANYA UNTUK USER/RELAWAN (ROLE 0) --}}
            @auth
                @if(Auth::user()->role == 0)
                    <li><a href="{{ url('/home') }}" style="color: #26c6da; font-weight: bold;">📊 Aktivitas Saya</a></li>
                @endif
            @endauth

            <li><a href="#">Terbaru</a></li>
            <li><a href="#">Hubungi Kami</a></li>
        </ul>
    </nav>

    <div class="header-right" style="display: flex; align-items: center; gap: 15px;">
        @auth
            <span style="color: white; font-size: 14px; font-weight: 600;">👋 {{ Auth::user()->name }}</span>
            
            <form action="{{ route('logout') }}" method="POST" style="margin: 0;">
                @csrf
                <button type="submit" class="donasi-btn" style="background-color: #ff4444 !important; border: none; padding: 8px 15px; border-radius: 5px; color: white; cursor: pointer; font-weight: bold;">
                    Keluar
                </button>
            </form>
        @else
            <button class="donasi-btn">
                <a href="{{ url('/profil') }}" style="text-decoration: none; color: white; font-weight: bold;">LOGIN</a>
            </button>
        @endauth
    </div>
</header>

    <div class="content-wrapper"> 
        @yield('konten')
    </div>

    <div id="zoomBeritaPanel" style="display:none; position:fixed; top:50%; left:50%; transform:translate(-50%, -50%); background:white; padding:20px; z-index:10001; border-radius:10px;">
        <div id="zoomBeritaContent"></div>
    </div>

    <script>
    function openZoomBerita() {
        let beritaHTML = document.getElementById("beritaContainer").innerHTML;
        document.getElementById("zoomBeritaContent").innerHTML = beritaHTML;
        document.getElementById("zoomBeritaPanel").style.display = "block";
    }

    // Fungsi close tetap ada di script namun tombol pemicunya (X) sudah hilang dari visual
    function closeZoomBerita() {
        document.getElementById("zoomBeritaPanel").style.display = "none";
    }

    document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.slide');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');
    const dots = document.querySelectorAll('.dot');
    
    let currentSlideIndex = 0;
    const totalSlides = slides.length;
    let autoSlideInterval;

    function showSlide(index) {
        slides.forEach(slide => slide.classList.remove('current-slide'));
        dots.forEach(dot => dot.classList.remove('active-dot'));

        if (index >= totalSlides) {
            currentSlideIndex = 0;
        } else if (index < 0) {
            currentSlideIndex = totalSlides - 1;
        } else {
            currentSlideIndex = index;
        }

        slides[currentSlideIndex].classList.add('current-slide');
        dots[currentSlideIndex].classList.add('active-dot');
    }

    function nextSlide() {
        showSlide(currentSlideIndex + 1);
    }

    if(nextBtn) nextBtn.addEventListener('click', () => { nextSlide(); resetAutoSlide(); });
    if(prevBtn) prevBtn.addEventListener('click', () => { showSlide(currentSlideIndex - 1); resetAutoSlide(); });

    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            showSlide(index);
            resetAutoSlide();
        });
    });

    function startAutoSlide() {
        autoSlideInterval = setInterval(nextSlide, 5000); 
    }

    function resetAutoSlide() {
        clearInterval(autoSlideInterval);
        startAutoSlide();
    }

    startAutoSlide();
    showSlide(0); 
    });
    </script>

    <section class="newsletter-section">
        <div class="newsletter-content">
            <div class="newsletter-text">
                <h3>Ingin Mengetahui Informasi terbaru setiap hari?</h3>
                <p>Dapatkan informasi terkini tentang isu kesehatan, pembangunan, dan relawan.</p>
            </div>
            <div class="newsletter-form">
                <form action="#" method="POST">
                    <input type="email" name="email" placeholder="Masukkan email Anda" required>
                    <button type="submit">Berlangganan</button>
                </form>
            </div>
        </div>
    </section>

</body>
</html>