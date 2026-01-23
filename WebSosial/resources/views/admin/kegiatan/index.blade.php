@extends('layout.style')

@section('konten')
<div style="min-height: 100vh; background-color: #f4f7f6; padding-top: 100px; padding-bottom: 50px;">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">

        <div style="background: white; padding: 30px; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); margin-bottom: 30px; display: flex; justify-content: space-between; align-items: center;">
            <div>
                <h1 style="color: #0277bd; margin: 0; font-weight: 700; font-size: 24px;">📅 Kelola Kegiatan</h1>
                <p style="color: #666; margin: 5px 0 0;">Tambah, edit, dan kelola kegiatan di sini</p>
            </div>
            <a href="{{ route('admin.kegiatan.create') }}" style="background: #0277bd; color: white; padding: 12px 30px; border-radius: 8px; text-decoration: none; font-weight: bold; border: none; cursor: pointer;">+ Tambah Kegiatan</a>
        </div>

        @if(session('success'))
            <div style="background: #e8f5e9; color: #2e7d32; padding: 15px; border-radius: 8px; margin-bottom: 20px; border-left: 5px solid #2e7d32;">
                {{ session('success') }}
            </div>
        @endif

        <div style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
            <table style="width: 100%; border-collapse: collapse;">
                <thead style="background: #f5f5f5; border-bottom: 2px solid #ddd;">
                    <tr>
                        <th style="padding: 20px; text-align: left; font-weight: 700; color: #333;">No</th>
                        <th style="padding: 20px; text-align: left; font-weight: 700; color: #333;">Foto</th>
                        <th style="padding: 20px; text-align: left; font-weight: 700; color: #333;">Nama Kegiatan</th>
                        <th style="padding: 20px; text-align: left; font-weight: 700; color: #333;">Lokasi</th>
                        <th style="padding: 20px; text-align: left; font-weight: 700; color: #333;">Tanggal</th>
                        <th style="padding: 20px; text-align: center; font-weight: 700; color: #333;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($kegiatan as $item)
                    <tr style="border-bottom: 1px solid #eee;">
                        <td style="padding: 20px; color: #666;">{{ $loop->iteration }}</td>
                        <td style="padding: 20px;">
                            @if($item->foto)
                                <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->nama }}" style="max-width: 80px; height: 60px; object-fit: cover; border-radius: 5px;">
                            @else
                                <span style="color: #999;">-</span>
                            @endif
                        </td>
                        <td style="padding: 20px; color: #333; font-weight: 500;">{{ $item->nama }}</td>
                        <td style="padding: 20px; color: #666;">{{ $item->lokasi }}</td>
                        <td style="padding: 20px; color: #666;">{{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</td>
                        <td style="padding: 20px; text-align: center;">
                            <a href="{{ route('admin.kegiatan.edit', $item) }}" style="background: #ffc107; color: white; padding: 8px 16px; border-radius: 5px; text-decoration: none; font-weight: bold; margin-right: 5px; display: inline-block;">Edit</a>
                            <form action="{{ route('admin.kegiatan.destroy', $item) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Yakin ingin menghapus?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="background: #dc3545; color: white; padding: 8px 16px; border-radius: 5px; border: none; cursor: pointer; font-weight: bold;">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" style="padding: 20px; text-align: center; color: #999;">Tidak ada kegiatan</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div style="margin-top: 20px;">
            {{ $kegiatan->links() }}
        </div>

    </div>
</div>
@endsection
