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
        body { font-family: 'Poppins', sans-serif; margin: 0; padding: 0; background-color: #f8f8f8; color: #333; }
        .cisdi-header { display: flex !important; justify-content: space-between !important; align-items: center !important; padding: 10px 30px !important; background-color: rgba(0, 0, 0, 0.7) !important; position: fixed !important; width: 100% !important; top: 0 !important; left: 0 !important; z-index: 9999 !important; backdrop-filter: blur(10px); }
        .cisdi-header .logo a { text-decoration: none !important; color: white !important; font-size: 28px !important; font-weight: 800; display: flex; align-items: center; gap: 5px; }
        .cisdi-header .logo span { color: #26c6da; }
        .cisdi-header nav ul { list-style: none !important; display: flex !important; margin: 0 !important; gap: 15px !important; }
        .cisdi-header nav ul li a { text-decoration: none !important; color: white !important; font-size: 14px !important; font-weight: 500; transition: 0.3s; }
        .cisdi-header nav ul li a:hover { color: #26c6da !important; }
        .donasi-btn { background-color: #0288d1; color: white; border: none; padding: 10px 15px; border-radius: 3px; cursor: pointer; font-weight: bold; font-size: 14px; }
        .content-wrapper { padding-top: 80px; min-height: 80vh; }
        .custom-footer { background-color: #011224 !important; border-top: 6px solid #0288d1 !important; color: white !important; padding: 80px 50px !important; }
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
            <li><a href="{{ url('/prokegi') }}">Program dan Kegiatan</a></li>
            @guest <li><a href="{{ url('/gabung') }}">Bergabung</a></li> @endguest
            @auth
                @if(Auth::user()->role == 1)
                    <li><a href="{{ route('admin.dashboard') }}" class="text-[#ffeb3b] font-bold">🛠️ Panel Kendali</a></li>
                @else
                    <li><a href="{{ route('home') }}" class="text-[#26c6da] font-bold">📊 Aktivitas Saya</a></li>
                @endif
            @endauth
            <li><a href="https://wa.me/6285713988535" target="_blank">Hubungi Admin</a></li>
        </ul>
    </nav>

    <div class="header-right flex items-center gap-4">
        @auth
            <span class="text-white text-sm font-semibold">👋 {{ Auth::user()->name }}</span>
            <form action="{{ url('/logout') }}" method="POST" class="m-0 p-0">
                @csrf
                <button type="submit" class="donasi-btn bg-red-600 hover:bg-red-700">Keluar</button>
            </form>
        @else
            {{-- PERBAIKAN DI SINI: Ke /login, bukan /profil --}}
            <a href="{{ route('login') }}" class="donasi-btn no-underline">LOGIN</a>
        @endauth
    </div>
</header>

<div class="content-wrapper">
    @yield('konten')
</div>

<footer class="custom-footer w-full">
    {{-- Isi Footer tetap sama --}}
    <div class="max-w-[1440px] mx-auto grid grid-cols-1 md:grid-cols-3 gap-16 items-start">
        <div><h1 class="f-logo-text uppercase text-white">RELAWAN<span class="f-logo-plus">+</span></h1></div>
        <div>
            <h3 class="font-bold text-xl mb-8 uppercase text-[#26c6da]">RPDC Center</h3>
            <p class="text-gray-300">Jl. Data Science No. 3, Semarang</p>
        </div>
        <div>
            <h3 class="font-bold text-xl mb-8 uppercase text-[#26c6da]">Media Sosial</h3>
            <p class="text-gray-300">@relawanplus_id</p>
        </div>
    </div>
</footer>

</body>
</html>
