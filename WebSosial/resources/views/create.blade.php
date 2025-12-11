@extends('layouts.main')

@section('content')
<h2>Tambah Kegiatan Sosial</h2>

<form action="/kegiatan/store" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label>Nama Kegiatan</label>
        <input type="text" name="nama" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Lokasi</label>
        <input type="text" name="lokasi" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Tanggal</label>
        <input type="date" name="tanggal" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea name="deskripsi" class="form-control" rows="4" required></textarea>
    </div>

    <div class="mb-3">
        <label>Foto Kegiatan</label>
        <input type="file" name="foto" class="form-control" required>
    </div>

    <button class="btn btn-success">Simpan</button>
</form>
@endsection
