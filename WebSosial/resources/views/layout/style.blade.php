<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Website Relawan')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0; padding: 0;
        background: #eef5f8; /* biru sosial lembut */
        color: #333;
    }

    /* Navigasi sosial */
    nav {
        background: linear-gradient(90deg, #1e88e5, #00acc1); /* biru → toska sosial */
        padding: 14px 30px;
        display: flex;
        justify-content: center;
        gap: 25px;
        position: sticky;
        top: 0;
        z-index: 100;
        border-bottom: 3px solid #bbdefb;
    }
    nav a {
        color: #fff;
        text-decoration: none;
        font-weight: 600;
        font-size: 16px;
        position: relative;
        padding: 6px 10px;
        transition: 0.3s;
    }
    nav a:hover {
        color: #ffeb3b; /* kuning cerah untuk kesan ramah */
    }
    nav a.active::after {
        content: "";
        position: absolute;
        width: 100%;
        height: 3px;
        background: #ffeb3b;
        bottom: -5px;
        left: 0;
        border-radius: 2px;
    }

    /* Konten */
    .content {
        min-height: 70vh;
        padding: 40px 20px;
    }

    /* Hero sosial */
    .hero {
        text-align: center;
        padding: 60px 20px;
        background: linear-gradient(135deg, #0288d1, #26c6da); /* lembut dan sosial */
        border-radius: 15px;
        color: #fff;
        margin-bottom: 40px;
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

    .hero a.btn {
        display: inline-block;
        padding: 12px 24px;
        background: #fff;
        color: #0288d1;
        font-weight: bold;
        border-radius: 30px; /* membulat untuk kesan sosial & ramah */
        text-decoration: none;
        transition: 0.3s;
        box-shadow: 0 4px 8px rgba(255,255,255,0.25);
    }
    .hero a.btn:hover {
        background: #ffeb3b;
        color: #000;
    }

    /* Section Layanan */
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

    .card .btn-secondary:hover {
        background: #ffe082;
        color: #000;
    }

.kolom {
    background: #ffffff;
    margin-top: 40px;
    padding: 35px 20px;
    border-radius: 15px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.07);
}

.kolom h2{
    text-align: center;
    max-width: 750px;
    margin: auto;
    font-size: 30px;
    line-height: 1.6;
    color: #0277bd; /* 💠 Lebih gelap untuk teks */
    font-weight: 500;
}

.kolom h3 {
    text-align: center;
    max-width: 750px;
    margin: auto;
    font-size: 25px;
    line-height: 1.6;
    color: #00acc1; /* 💠 Lebih gelap untuk teks */
    font-weight: 500;
}

.kolom p {
    text-align: center;
    max-width: 750px;
    margin: auto;
    font-size: 17px;
    line-height: 1.6;
    color: #222; /* 💠 Lebih gelap untuk teks */
    font-weight: 500;
}

 .kolom:hover {
    transform: translateY(-6px);
    box-shadow: 0 6px 14px rgba(0,0,0,0.12);
}

.scroll {
    text-align: center;
    padding: 60px 20px;
    background: linear-gradient(135deg, #0288d1, #26c6da); /
    border-radius: 15px;
    color: #fff;
    margin-bottom: 40px;
    box-shadow: 0 6px 15px rgba(0,0,0,0.1);
    max-height: 600px;    
    overflow-y: auto;  
    padding-right: 10px;
}

.scroll h1 {
        font-size: 42px;
        margin-bottom: 10px;
        font-weight: 700;
        letter-spacing: 0.5px;
}
.kontak {
    background: #ffffff;
    margin-top: 40px;
    padding: 35px 20px;
    border-radius: 15px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.07);
    border-left: 6px solid #00796b; /* warna sedikit berbeda agar lebih hidup */
}

.kontak p {
    text-align: center;
    max-width: 750px;
    margin: auto;
    font-size: 17px;
    line-height: 1.6;
    color: #555; /* warna normal */
}


    .kontak a.btn-primary {
        text-align: center;
        display: inline-block;
        margin-top: 15px;
        padding: 12px 26px;
        background: #0288d1;
        color: white;
        text-decoration: none;
        border-radius: 30px;
        font-weight: 600;
        transition: 0.3s;
        box-shadow: 0 4px 10px rgba(0,0,0,0.15);
    }

    .kontak a.btn-primary:hover {
        background: #ffeb3b;
        color: #000;
    }

    /* Footer */
    footer {
        background: #0288d1;
        text-align: center;
        padding: 15px;
        font-size: 14px;
        color: #fff;
        margin-top: 40px;
    }
</style>
    <div class="content">
        @yield('konten')
    </div> 
</body>
</html>
