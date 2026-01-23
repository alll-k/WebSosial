@extends('layout.style')

@section('konten')
<div style="min-height: 100vh; background-color: #f4f7f6; padding-top: 100px; padding-bottom: 50px;">
    <div style="max-width: 800px; margin: 0 auto; padding: 0 20px;">

        <div style="background: white; padding: 30px; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
            <h1 style="color: #0277bd; margin: 0 0 30px; font-weight: 700;">📝 Tambah Berita</h1>

            @if($errors->any())
                <div style="background: #f8d7da; color: #721c24; padding: 15px; border-radius: 8px; margin-bottom: 20px; border-left: 5px solid #721c24;">
                    <ul style="margin: 0; padding-left: 20px;">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div style="margin-bottom: 20px;">
                    <label style="display: block; margin-bottom: 8px; font-weight: 600; color: #333;">Judul</label>
                    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul') }}" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px;">
                </div>

                <div style="margin-bottom: 20px;">
                    <label style="display: block; margin-bottom: 8px; font-weight: 600; color: #333;">Penulis</label>
                    <input type="text" name="penulis" class="form-control @error('penulis') is-invalid @enderror" value="{{ old('penulis') }}" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px;">
                </div>

                <div style="margin-bottom: 20px;">
                    <label style="display: block; margin-bottom: 8px; font-weight: 600; color: #333;">Konten</label>
                    <textarea name="konten" class="form-control @error('konten') is-invalid @enderror" rows="10" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px; font-family: Arial;">{{ old('konten') }}</textarea>
                </div>

                <div style="margin-bottom: 20px;">
                    <label style="display: block; margin-bottom: 8px; font-weight: 600; color: #333;">Gambar</label>
                    <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror" accept="image/*" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px;">
                    <small style="color: #666;">Format: JPG, PNG, GIF (Max 2MB)</small>
                </div>

                <div style="display: flex; gap: 10px;">
                    <button type="submit" style="background: #0277bd; color: white; padding: 12px 30px; border-radius: 8px; border: none; cursor: pointer; font-weight: bold;">Simpan</button>
                    <a href="{{ route('admin.berita.index') }}" style="background: #6c757d; color: white; padding: 12px 30px; border-radius: 8px; text-decoration: none; font-weight: bold; display: flex; align-items: center;">Kembali</a>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection
