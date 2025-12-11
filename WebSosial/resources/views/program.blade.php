@extends('layout.style')

@section('konten')

<div class="container mt-5 mb-5">

    <div class="text-center mb-4">
        <h1 class="fw-bold">Program Pemberdayaan Masyarakat</h1>
        <p class="text-muted">Ayo bergabung dan jadilah bagian dari perubahan!</p>
    </div>

    <p>
        Kami menghadirkan berbagai program relawan yang berfokus pada kegiatan sosial dan pengembangan komunitas. 
        Melalui layanan masyarakat, program kemanusiaan, serta pendampingan langsung di lapangan, kami berkomitmen 
        membantu meningkatkan kualitas hidup masyarakat yang membutuhkan.
    </p>

    <h3 class="mt-4">Fokus Program:</h3>

    <ul>
        <li>
            <strong>Kegiatan sosial & pelayanan masyarakat</strong> — 
            Meliputi aksi bersih lingkungan, pembagian sembako, pemeriksaan kesehatan gratis, 
            serta kegiatan yang bertujuan meningkatkan kesejahteraan masyarakat secara langsung.
        </li>

        <li>
            <strong>Program kemanusiaan dan bantuan darurat</strong> — 
            Relawan terlibat dalam penanganan bencana, distribusi bantuan, evakuasi, dan dukungan 
            untuk masyarakat terdampak bencana alam atau kondisi darurat lainnya.
        </li>

        <li>
            <strong>Pemberdayaan komunitas dan pelatihan keterampilan</strong> — 
            Program ini mendukung masyarakat agar lebih mandiri melalui pelatihan keterampilan, 
            seperti pengembangan UMKM, kerajinan tangan, literasi digital, dan peningkatan kapasitas lainnya.
        </li>

        <li>
            <strong>Relawan pendidikan dan pendampingan generasi muda</strong> — 
            Mengajar anak-anak, memberikan bimbingan belajar, kegiatan motivasi, serta pendampingan 
            bagi remaja untuk meningkatkan kualitas pendidikan dan karakter.
        </li>
    </ul>

    <div class="mt-4 p-4 bg-light rounded shadow-sm">
        <h4 class="fw-bold">Mari Bergabung!</h4>
        <p>
            Jadilah bagian dari komunitas relawan yang bergerak untuk menciptakan perubahan nyata. 
            Dengan bergabung bersama kami, Anda dapat berkontribusi langsung dalam berbagai kegiatan 
            sosial, membantu masyarakat, dan mendukung program kemanusiaan yang kami jalankan.
        </p>

        <h5 class="fw-semibold mt-3">Cara Bergabung:</h5>
        <ol>
            <li>Mengisi formulir pendaftaran relawan yang tersedia di halaman <strong>"Daftar Relawan"</strong>.</li>
            <li>Menunggu verifikasi dan konfirmasi dari tim kami melalui email atau WhatsApp.</li>
            <li>Mengikuti briefing atau pelatihan singkat sebelum terjun ke lapangan.</li>
            <li>Siap berpartisipasi dalam kegiatan sosial sesuai jadwal yang tersedia.</li>
        </ol>

        <p class="mt-3">
            Anda siap membantu? Tekan tombol di bawah ini untuk memulai perjalanan menjadi relawan!
        </p>

        <a href="/daftar-relawan" class="btn btn-primary mt-2">Daftar Relawan</a>
    </div>

</div>

@endsection
