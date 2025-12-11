@extends('layouts.main')

@section('content')
<h2>Daftar Kegiatan Sosial</h2>

<a href="/kegiatan/tambah" class="btn btn-primary mb-3">Tambah Kegiatan</a>

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="row">
@foreach ($data as $k)
    <div class="col-md-4 mb-3">
        <div class="card">
            <img src="/foto_kegiatan/{{ $k->foto }}" class="card-img-top" style="height:200px;object-fit:cover;">
            <div class="card-body">
                <h5>{{ $k->nama }}</h5>
                <p><b>Lokasi:</b> {{ $k->lokasi }}</p>
                <p><b>Tanggal:</b> {{ $k->tanggal }}</p>
                <p>{{ $k->deskripsi }}</p>
            </div>
        </div>
    </div>
@endforeach
</div>

@endsection
