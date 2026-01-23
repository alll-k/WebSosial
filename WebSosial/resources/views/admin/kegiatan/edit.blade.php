@extends('layout.style')

@section('konten')
<div style="min-height: 100vh; background-color: #f4f7f6; padding-top: 100px; padding-bottom: 50px;">
    <div style="max-width: 800px; margin: 0 auto; padding: 0 20px;">

        <div style="background: white; padding: 30px; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
            <h1 style="color: #0277bd; margin: 0 0 30px; font-weight: 700;">✏️ Edit Kegiatan</h1>

            @if($errors->any())
                <div style="background: #f8d7da; color: #721c24; padding: 15px; border-radius: 8px; margin-bottom: 20px; border-left: 5px solid #721c24;">
                    <ul style="margin: 0; padding-left: 20px;">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.kegiatan.update', $kegiatan) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div style="margin-bottom: 20px;">
                    <label style="display: block; margin-bottom: 8px; font-weight: 600; color: #333;">Nama Kegiatan</label>
                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama', $kegiatan->nama) }}" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px;">
                </div>

                <div style="margin-bottom: 20px;">
                    <label style="display: block; margin-bottom: 8px; font-weight: 600; color: #333;">Lokasi</label>
                    <input type="text" name="lokasi" class="form-control @error('lokasi') is-invalid @enderror" value="{{ old('lokasi', $kegiatan->lokasi) }}" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px;">
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                    <div>
                        <label style="display: block; margin-bottom: 8px; font-weight: 600; color: #333;">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal', $kegiatan->tanggal) }}" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px;">
                    </div>
                    <div>
                        <label style="display: block; margin-bottom: 8px; font-weight: 600; color: #333;">Jam</label>
                        <input type="time" name="jam" class="form-control @error('jam') is-invalid @enderror" value="{{ old('jam', $kegiatan->jam) }}" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px;">
                    </div>
                </div>

                <div style="margin-bottom: 20px;">
                    <label style="display: block; margin-bottom: 8px; font-weight: 600; color: #333;">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="8" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px; font-family: Arial;">{{ old('deskripsi', $kegiatan->deskripsi) }}</textarea>
                </div>

                <div style="margin-bottom: 20px;">
                    <label style="display: block; margin-bottom: 8px; font-weight: 600; color: #333;">Foto</label>
                    @if($kegiatan->foto)
                        <div style="margin-bottom: 10px;">
                            <img src="{{ asset('storage/' . $kegiatan->foto) }}" alt="Foto Kegiatan" style="max-width: 300px; border-radius: 8px;">
                        </div>
                    @endif
                    <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror" accept="image/*" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px;">
                    <small style="color: #666;">Format: JPG, PNG, GIF (Max 2MB) - Kosongkan jika tidak ingin mengubah</small>
                </div>

                <div style="display: flex; gap: 10px;">
                    <button type="submit" style="background: #0277bd; color: white; padding: 12px 30px; border-radius: 8px; border: none; cursor: pointer; font-weight: bold;">Simpan Perubahan</button>
                    <a href="{{ route('admin.kegiatan.index') }}" style="background: #6c757d; color: white; padding: 12px 30px; border-radius: 8px; text-decoration: none; font-weight: bold; display: flex; align-items: center;">Kembali</a>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection
