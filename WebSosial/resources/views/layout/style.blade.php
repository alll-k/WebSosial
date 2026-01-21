<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Website Relawan')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0; padding: 0;
            background-color: #f8f8f8;
            color: #333;
        }

        /* HEADER NAVIGASI - Hitam Transparan */
        .cisdi-header {
            display: flex !important;
            justify-content: space-between !important;
            align-items: center !important;
            padding: 10px 30px !important;
            background-color: rgba(0, 0, 0, 0.7) !important;
            position: fixed !important;
            width: 100% !important;
            top: 0 !important;
            left: 0 !important;
            z-index: 9999 !important;
            backdrop-filter: blur(10px);
        }

        .cisdi-header .logo a {
            text-decoration: none !important;
            color: white !important;
            font-size: 28px !important;
            font-weight: 800;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .cisdi-header .logo span { color: #26c6da; }

        .cisdi-header nav ul {
            list-style: none !important;
            display: flex !important;
            margin: 0 !important;
            gap: 15px !important;
        }

        .cisdi-header nav ul li a {
            text-decoration: none !important;
            color: white !important;
            font-size: 14px !important;
            font-weight: 500;
            transition: 0.3s;
        }

        .cisdi-header nav ul li a:hover { color: #26c6da !important; }

        .donasi-btn {
            background-color: #0288d1;
            color: white; border: none;
            padding: 10px 15px; border-radius: 3px;
            cursor: pointer; font-weight: bold;
            font-size: 14px;
        }

        /* CONTENT WRAPPER */
        .content-wrapper { margin-top: 0 !important; padding: 0 !important; }

        /* FOOTER - Biru Navy Sangat Gelap (Tidak Nabrak) */
        .custom-footer {
            background-color: #011224 !important; /* Warna Gelap yang Solid dan Elegan */
            border-top: 6px solid #0288d1 !important;
            color: white !important;
            padding: 80px 50px !important;
        }

        /* Footer Logo Horizontal */
        .f-logo-text { font-size: 52px; font-weight: 900; letter-spacing: -2px; }
        .f-logo-plus { font-size: 58px; font-weight: 900; color: #26c6da; }
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
            @guest <li><a href="{{ url('/gabung') }}">Bergabung dengan Kami</a></li> @endguest
            @auth
                @if(Auth::user()->role == 1)
                    <li><a href="{{ url('/admin/dashboard') }}" class="text-[#ffeb3b] font-bold">🛠️ Panel Kendali</a></li>
                @elseif(Auth::user()->role == 0)
                    <li><a href="{{ url('/home') }}" class="text-[#26c6da] font-bold">📊 Aktivitas Saya</a></li>
                @endif
            @endauth
            <li><a href="https://wa.me/6285713988535" target="_blank">Hubungi Admin</a></li>
        </ul>
    </nav>

    <div class="header-right flex items-center gap-4">
        @auth
            <span class="text-white text-sm font-semibold">👋 {{ Auth::user()->name }}</span>
            <form action="{{ route('logout') }}" method="POST" class="m-0">
                @csrf
                <button type="submit" class="donasi-btn bg-red-600 hover:bg-red-700 border-none rounded-[5px] text-white font-bold p-[8px_15px] cursor-pointer">Keluar</button>
            </form>
        @else
            <button class="donasi-btn">
                <a href="{{ url('/profil') }}" class="no-underline text-white font-bold">LOGIN</a>
            </button>
        @endauth
    </div>
</header>

<div class="content-wrapper"> 
    @yield('konten')
</div>

<footer class="custom-footer w-full">
    <div class="max-w-[1440px] mx-auto grid grid-cols-1 md:grid-cols-3 gap-16 items-start text-left">
        
        <div class="flex justify-start">
            <h1 class="f-logo-text text-white uppercase flex items-center gap-2">
                RELAWAN<span class="f-logo-plus">+</span>
            </h1>
        </div>

        <div class="flex flex-col">
            <h3 class="font-bold text-xl mb-8 uppercase tracking-widest text-[#26c6da]">RPDC Center</h3>
            <div class="space-y-5 text-gray-300 text-[14px] leading-relaxed">
                <div class="flex items-start gap-4">
                    <i class="fas fa-map-marker-alt mt-1 text-white text-lg"></i>
                    <p>Jl. Data Science No. 3 RT.01/02, Kel. Sambiroto, <br>Kec. Tembalang, Kota Semarang, 50275</p>
                </div>
                <div class="flex items-center gap-4">
                    <i class="fas fa-phone-alt text-white text-lg"></i>
                    <p>(+62) 812 3456 7890</p>
                </div>
                <div class="flex items-center gap-4">
                    <i class="fas fa-envelope text-white text-lg"></i>
                    <p>admin@relawanplus.id</p>
                </div>
            </div>
        </div>

        <div class="flex flex-col md:pl-10">
            <h3 class="font-bold text-xl mb-8 uppercase tracking-widest text-[#26c6da]">Media Sosial</h3>
            <ul class="space-y-4 text-[14px]">
                <li class="flex items-center gap-5 text-gray-300 hover:text-[#26c6da] cursor-pointer transition-all">
                    <i class="fab fa-instagram text-2xl w-8 text-center"></i> <span>relawanplus_id</span>
                </li>
                <li class="flex items-center gap-5 text-gray-300 hover:text-[#26c6da] cursor-pointer transition-all">
                    <i class="fab fa-twitter text-2xl w-8 text-center"></i> <span>@RelawanPlus_ID</span>
                </li>
                <li class="flex items-center gap-5 text-gray-300 hover:text-[#26c6da] cursor-pointer transition-all">
                    <i class="fab fa-youtube text-2xl w-8 text-center"></i> <span>RELAWANPLUS CHANNEL</span>
                </li>
            </ul>
        </div>

    </div>
</footer>

</body>
</html>