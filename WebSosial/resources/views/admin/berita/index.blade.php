@extends('layout.style')

@section('konten')
<div style="min-height: 100vh; background-color: #f4f7f6; padding-top: 100px; padding-bottom: 50px;">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">

        <!-- Header -->
        <div style="background: white; padding: 30px; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); margin-bottom: 30px; display: flex; justify-content: space-between; align-items: center;">
            <div>
                <h1 style="color: #0277bd; margin: 0; font-weight: 700; font-size: 24px;">📰 Kelola Berita</h1>
                <p style="color: #666; margin: 5px 0 0;">Tambah, edit, dan kelola berita di sini</p>
            </div>
            <a href="{{ route('admin.berita.create') }}" style="background: #0277bd; color: white; padding: 12px 30px; border-radius: 8px; text-decoration: none; font-weight: bold; border: none; cursor: pointer;">+ Tambah Berita</a>
        </div>

        @if(session('success'))
            <div style="background: #e8f5e9; color: #2e7d32; padding: 15px; border-radius: 8px; margin-bottom: 20px; border-left: 5px solid #2e7d32;">
                {{ session('success') }}
            </div>
        @endif

        <!-- Table -->
        <div style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
            <table style="width: 100%; border-collapse: collapse;">
                <thead style="background: #f5f5f5; border-bottom: 2px solid #ddd;">
                    <tr>
                        <th style="padding: 20px; text-align: left; font-weight: 700; color: #333;">No</th>
                        <th style="padding: 20px; text-align: left; font-weight: 700; color: #333;">Gambar</th>
                        <th style="padding: 20px; text-align: left; font-weight: 700; color: #333;">Judul</th>
                        <th style="padding: 20px; text-align: left; font-weight: 700; color: #333;">Penulis</th>
                        <th style="padding: 20px; text-align: left; font-weight: 700; color: #333;">Tanggal</th>
                        <th style="padding: 20px; text-align: center; font-weight: 700; color: #333;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($berita as $item)
                    <tr style="border-bottom: 1px solid #eee;">
                        <td style="padding: 20px; color: #666;">{{ $loop->iteration }}</td>
                        <td style="padding: 20px;">
                            @if($item->gambar)
                                <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" style="max-width: 80px; height: 60px; object-fit: cover; border-radius: 5px;">
                            @else
                                <span style="color: #999;">-</span>
                            @endif
                        </td>
                        <td style="padding: 20px; color: #333; font-weight: 500;">{{ $item->judul }}</td>
                        <td style="padding: 20px; color: #666;">{{ $item->penulis }}</td>
                        <td style="padding: 20px; color: #666;">{{ $item->created_at->format('d M Y') }}</td>
                        <td style="padding: 20px; text-align: center;">
                            <a href="{{ route('admin.berita.edit', $item) }}" style="background: #ffc107; color: white; padding: 8px 16px; border-radius: 5px; text-decoration: none; font-weight: bold; margin-right: 5px; display: inline-block;">Edit</a>
                            <form action="{{ route('admin.berita.destroy', $item) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Yakin ingin menghapus?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="background: #dc3545; color: white; padding: 8px 16px; border-radius: 5px; border: none; cursor: pointer; font-weight: bold;">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" style="padding: 20px; text-align: center; color: #999;">Tidak ada berita</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div style="margin-top: 20px;">
            {{ $berita->links() }}
        </div>

    </div>
</div>
@endsection
