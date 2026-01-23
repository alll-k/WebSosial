<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kegiatan;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    // ==================== BERITA ====================
    public function beritaIndex()
    {
        $berita = Berita::with('creator')->latest()->paginate(10);
        return view('admin.berita.index', compact('berita'));
    }

    public function beritaCreate()
    {
        return view('admin.berita.create');
    }

    public function beritaStore(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'konten' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();
        $data['created_by'] = auth()->id();
        $data['slug'] = Str::slug($request->judul);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('berita', 'public');
        }

        Berita::create($data);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil ditambahkan!');
    }

    public function beritaEdit(Berita $berita)
    {
        return view('admin.berita.edit', compact('berita'));
    }

    public function beritaUpdate(Request $request, Berita $berita)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'konten' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->judul);

        if ($request->hasFile('gambar')) {
            if ($berita->gambar) {
                \Storage::disk('public')->delete($berita->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('berita', 'public');
        }

        $berita->update($data);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil diperbarui!');
    }

    public function beritaDestroy(Berita $berita)
    {
        if ($berita->gambar) {
            \Storage::disk('public')->delete($berita->gambar);
        }
        $berita->delete();

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil dihapus!');
    }

    // ==================== KEGIATAN ====================
    public function kegiatanIndex()
    {
        $kegiatan = Kegiatan::with('creator')->latest()->paginate(10);
        return view('admin.kegiatan.index', compact('kegiatan'));
    }

    public function kegiatanCreate()
    {
        return view('admin.kegiatan.create');
    }

    public function kegiatanStore(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'jam' => 'required',
            'deskripsi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();
        $data['created_by'] = auth()->id();

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('kegiatan', 'public');
        }

        Kegiatan::create($data);

        return redirect()->route('admin.kegiatan.index')->with('success', 'Kegiatan berhasil ditambahkan!');
    }

    public function kegiatanEdit(Kegiatan $kegiatan)
    {
        return view('admin.kegiatan.edit', compact('kegiatan'));
    }

    public function kegiatanUpdate(Request $request, Kegiatan $kegiatan)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'jam' => 'required',
            'deskripsi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('foto')) {
            if ($kegiatan->foto) {
                \Storage::disk('public')->delete($kegiatan->foto);
            }
            $data['foto'] = $request->file('foto')->store('kegiatan', 'public');
        }

        $kegiatan->update($data);

        return redirect()->route('admin.kegiatan.index')->with('success', 'Kegiatan berhasil diperbarui!');
    }

    public function kegiatanDestroy(Kegiatan $kegiatan)
    {
        if ($kegiatan->foto) {
            \Storage::disk('public')->delete($kegiatan->foto);
        }
        $kegiatan->delete();

        return redirect()->route('admin.kegiatan.index')->with('success', 'Kegiatan berhasil dihapus!');
    }

    // ==================== PROGRAM ====================
    public function programIndex()
    {
        $program = Program::with('creator')->latest()->paginate(10);
        return view('admin.program.index', compact('program'));
    }

    public function programCreate()
    {
        return view('admin.program.create');
    }

    public function programStore(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tujuan' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:aktif,nonaktif',
        ]);

        $data = $request->all();
        $data['created_by'] = auth()->id();
        $data['slug'] = Str::slug($request->nama);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('program', 'public');
        }

        Program::create($data);

        return redirect()->route('admin.program.index')->with('success', 'Program berhasil ditambahkan!');
    }

    public function programEdit(Program $program)
    {
        return view('admin.program.edit', compact('program'));
    }

    public function programUpdate(Request $request, Program $program)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tujuan' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:aktif,nonaktif',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->nama);

        if ($request->hasFile('gambar')) {
            if ($program->gambar) {
                \Storage::disk('public')->delete($program->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('program', 'public');
        }

        $program->update($data);

        return redirect()->route('admin.program.index')->with('success', 'Program berhasil diperbarui!');
    }

    public function programDestroy(Program $program)
    {
        if ($program->gambar) {
            \Storage::disk('public')->delete($program->gambar);
        }
        $program->delete();

        return redirect()->route('admin.program.index')->with('success', 'Program berhasil dihapus!');
    }
}
