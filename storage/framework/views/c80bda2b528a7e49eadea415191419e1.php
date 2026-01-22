<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?php echo $__env->yieldContent('title', 'Website Relawan'); ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
    
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0; padding: 0;
        /* Hapus background fixed/cover dari body agar slider bisa mengisi penuh */
        background-color: #f8f8f8; /* Ganti dengan warna solid ringan */
        color: #333;
    }

    .program-banner {
    width: 100%;
    height: 350px; /* Atur ketinggian banner */
    margin-bottom: 40px; /* Jarak dari section di bawahnya */
    overflow: hidden;
    position: relative;
    border-radius: 15px; /* Beri sedikit sudut melengkung */
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.program-banner img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: brightness(85%); /* Sedikit gelap agar teks terlihat */
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

    .cisdi-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 30px;
        background-color: rgba(0, 0, 0, 0.7); 
        position: absolute; 
        width: 100%;
        top: 0; /* Pastikan di paling atas */
        z-index: 1000; 
    }

    .cisdi-header .logo {
        font-size: 28px;
        font-weight: bold;
        color: white;
    }

    .cisdi-header .logo span {
        color: #26c6da; /* Ganti dari orange ke Cyan */
    }

    .cisdi-header nav ul {
        list-style: none;
        display: flex;
        margin: 0;
        padding: 0;
    }

    .cisdi-header nav ul li a {
        text-decoration: none;
        color: white;
        padding: 10px 12px;
        display: block;
        font-size: 14px;
        transition: color 0.3s;
    }

    .cisdi-header nav ul li a:hover {
        color: #26c6da; /* Ganti warna hover */
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
        /* Disesuaikan agar konten tidak terpotong header */
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

        border-radius: 20px; /* bentuk sosial */

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
        position: relative; /* Penting untuk zoom-btn */
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
    background-color: white; /* Latar putih untuk mitra */
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
    overflow-x: auto; /* Untuk simulasi geser horizontal */
    padding: 10px 0;
}

.mitra-logo-item {
    min-width: 150px; /* Lebar minimum logo */
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
    filter: grayscale(100%); /* Membuat logo grayscale (umum di situs CISDI) */
    opacity: 0.6;
    transition: filter 0.3s, opacity 0.3s;
}

.mitra-logo-item:hover img {
    filter: grayscale(0%); /* Warna penuh saat hover */
    opacity: 1;
}

.detail-link {
    display: inline-block;
    color: #0288d1; /* Warna Biru Aksi */
    text-decoration: none;
    font-weight: 600;
    margin-top: 30px;
    font-size: 16px;
}

/* BERLANGGANAN NAWALA SECTION */
.newsletter-section {
    background-color: #7b1fa2; /* Warna ungu tua (diambil dari gambar) */
    background-image: linear-gradient(135deg, #1e88e5 0%, #00acc1 100%); /* Ganti dengan gradient Biru/Cyan */
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
    flex-wrap: wrap; /* Responsif */
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
    background-color: #0288d1; /* Biru Aksi */
    color: white;
    border: none;
    padding: 12px 20px;
    border-radius: 4px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s;
}

.newsletter-form button:hover {
    background-color: #00acc1; /* Cyan Hover */
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
    background-color: #f0f8ff; /* Warna latar sangat terang (Azure) */
    text-align: center;
}

.expertise-section h2 {
    font-size: 32px;
    font-weight: 700;
    color: #0277bd; /* Warna Biru Tema Anda */
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
    flex: 1 1 300px; /* Fleksibel, tapi lebar dasar 300px */
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
    height: 200px; /* Tinggi tetap untuk gambar */
    object-fit: cover;
}

.expertise-text {
    padding: 20px;
}

.expertise-text h3 {
    font-size: 20px;
    font-weight: 600;
    color: #00acc1; /* Cyan Tema Anda */
    margin-bottom: 15px;
    min-height: 50px; /* Memastikan tinggi judul seragam */
}

.expertise-text p {
    font-size: 14px;
    line-height: 1.6;
    color: #555;
}

@media (max-width: 992px) {
    .expertise-card {
        flex: 1 1 45%; /* Dua kolom di tablet */
        margin-bottom: 20px;
    }
}
@media (max-width: 600px) {
    .expertise-card {
        flex: 1 1 100%; /* Satu kolom di HP */
    }
}

    </style>
</head>

    <div class="content-wrapper"> 
        <?php echo $__env->yieldContent('konten'); ?>
    </div>

    <div id="zoomBeritaPanel">
        <button class="close-btn" onclick="closeZoomBerita()">Tutup X</button>
        <div id="zoomBeritaContent"></div>
    </div>

    <script>
    function openZoomBerita() {
        // Ambil isi berita lengkap
        let beritaHTML = document.getElementById("beritaContainer").innerHTML;

        document.getElementById("zoomBeritaContent").innerHTML = beritaHTML;
        document.getElementById("zoomBeritaPanel").style.display = "block";
    }

    function closeZoomBerita() {
        document.getElementById("zoomBeritaPanel").style.display = "none";
    }

    document.addEventListener('DOMContentLoaded', function() {
    // Memilih elemen-elemen penting
    const slides = document.querySelectorAll('.slide');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');
    const dots = document.querySelectorAll('.dot');
    
    // Variabel status
    let currentSlideIndex = 0;
    const totalSlides = slides.length;
    let autoSlideInterval;

    // Fungsi utama untuk menampilkan slide tertentu
    function showSlide(index) {
        // Hapus kelas aktif dari semua slide dan dots
        slides.forEach(slide => slide.classList.remove('current-slide'));
        dots.forEach(dot => dot.classList.remove('active-dot'));

        // Atur index agar berulang (looping)
        if (index >= totalSlides) {
            currentSlideIndex = 0;
        } else if (index < 0) {
            currentSlideIndex = totalSlides - 1;
        } else {
            currentSlideIndex = index;
        }

        // Tambahkan kelas aktif ke slide dan dot yang baru
        slides[currentSlideIndex].classList.add('current-slide');
        dots[currentSlideIndex].classList.add('active-dot');
    }

    // Fungsi untuk menggeser ke slide berikutnya
    function nextSlide() {
        showSlide(currentSlideIndex + 1);
    }

    // Event Listener untuk tombol Next/Prev
    nextBtn.addEventListener('click', () => {
        nextSlide();
        resetAutoSlide(); // Reset timer saat pengguna berinteraksi
    });

    prevBtn.addEventListener('click', () => {
        showSlide(currentSlideIndex - 1);
        resetAutoSlide(); // Reset timer saat pengguna berinteraksi
    });

    // Event Listener untuk Dots (indikator)
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            showSlide(index);
            resetAutoSlide();
        });
    });

    // Otomatis Geser (Auto Slide)
    function startAutoSlide() {
        // Ganti slide setiap 5 detik (5000 ms)
        autoSlideInterval = setInterval(nextSlide, 5000); 
    }

    // Menghentikan dan memulai kembali auto slide saat ada interaksi manual
    function resetAutoSlide() {
        clearInterval(autoSlideInterval);
        startAutoSlide();
    }

    // Mulai auto slide saat halaman dimuat
    startAutoSlide();

    // Tampilkan slide pertama saat inisialisasi
    showSlide(0); 
    });
    </script>
    </body>

        <header class="cisdi-header">
        <div class="logo"><a href="<?php echo e(url ('/')); ?>">RELAWAN<span>+</span></a></div>
        <nav>
            <ul>
                <li><a href="<?php echo e(url('/tentang')); ?>">Tentang Kami</a></li>
                <li><a href="<?php echo e(url('/prokegi')); ?>">Program dan Kegiatan Kami</a></li>
                <li><a href="#">Riset & Publikasi ▾</a></li>
                <li><a href="#">Bergabung dengan Kami</a></li>
                <li><a href="#">Terbaru</a></li>
                <li><a href="#">Event</a></li>
                <li><a href="#">Hubungi Kami</a></li>
            </ul>
        </nav>
        <button class="donasi-btn">#DukungKaderKesehatan</button>
    </header>

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
</html><?php /**PATH C:\WebSosial\WebSosial\resources\views/layout/style.blade.php ENDPATH**/ ?>