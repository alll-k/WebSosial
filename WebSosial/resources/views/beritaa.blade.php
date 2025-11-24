@extends('layout.style')

@section('konten')
<div class="hero">
    <article>
        <h1>{{ $new_berita["judul"] }}</judul>
        <h3>{{ $new_berita["penulis"]}}</h3>
        <p>{{ $new_berita["konten"]}}</p>
    </article>
</div>

<div class="hero">
    <article>
        <h1> Tanggapan Kami</h1>
        <p>blablabla</p>
    </article>

</div>

<div class="btn" style="text-align:center">
<a href ="{{ url('/') }}">Kembali</a>
</div>
@endsection