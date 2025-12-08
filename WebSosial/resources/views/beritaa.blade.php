@php
    $new_berita = $new_berita ?? null;
    $new_tanggapan = $new_tanggapan ?? null;
    $tanggapans = $tanggapans ?? [];
@endphp

@extends('layout.style')

@section('konten')


@if($new_berita)
<div class="hero">
    <article>
        <h1>{{ $new_berita["judul"] }}</h1>
        <h3>{{ $new_berita["penulis"] }}</h3>
        <p>{{ $new_berita["konten"] }}</p>
    </article>
</div>
@else
<div class="hero">
    <p>Tidak ada berita yang dipilih.</p>
</div>
@endif

<div class="hero" style="margin-top: 30px">
    <article>

        @if($new_tanggapan)
            {{-- Jika tanggapan dipilih --}}
            <h1>{{ $new_tanggapan["tanggapan"] }}</h1>
            <h3>{{ $new_tanggapan["penuliss"] }}</h3>
            <p>{{ $new_tanggapan["isi"] }}</p>

        @else
            {{-- Jika tidak ada tanggapan --}}
            <p>Tidak ada tanggapan yang dipilih.</p>
        @endif

    </article>
</div>



{{-- =======================
    LIST TANGGAPAN (opsional)
    Jika ingin menampilkan daftar tanggapan
======================= --}}
@if(count($tanggapans) > 0)
<div class="hero" style="margin-top: 30px">
    <h2>Daftar Tanggapan Lain</h2>
    <ul>
        @foreach($tanggapans as $t)
            <li>
                <a href="{{ url('/tanggapan/' . $t['tanggapan']) }}">
                    {{ $t['tanggapan'] }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
@endif



{{-- =======================
    TOMBOL KEMBALI
======================= --}}
<div class="btn" style="text-align:center; margin-top: 40px;">
    <a href ="{{ url('/') }}">Kembali</a>
</div>

@endsection
