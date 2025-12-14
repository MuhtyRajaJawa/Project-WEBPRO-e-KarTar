<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    // 📌 Tampilkan Semua Kegiatan
    public function index()
    {
        $kegiatans = Kegiatan::orderBy('id', 'desc')->get();
        return view('admin.kegiatan.index', compact('kegiatans'));
    }

    // 📌 Form Tambah Kegiatan
    public function create()
    {
        return view('admin.kegiatan.create');
    }

    // 📌 Simpan Kegiatan
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'lokasi' => 'required|string',
            'status' => 'required|string'
        ]);

        Kegiatan::create($request->all());

        return redirect()->route('admin.kegiatan.index')->with('success', 'Kegiatan berhasil ditambahkan!');
    }

    // 📌 Detail kegiatan
    public function show($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        return view('admin.kegiatan.show', compact('kegiatan'));
    }

    // 📌 Form Edit
    public function edit($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        return view('admin.kegiatan.edit', compact('kegiatan'));
    }

    // 📌 Update kegiatan
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'lokasi' => 'required',
            'status' => 'required|in:Rencana,Berjalan,Selesai',
        ]);

        $kegiatan = Kegiatan::findOrFail($id);
        $kegiatan->update($request->all());

        return redirect()->route('admin.kegiatan.index')
                        ->with('success', 'Kegiatan berhasil diperbarui!');
    }


    // 📌 Hapus kegiatan
    public function destroy($id)
    {
        Kegiatan::destroy($id);
        return redirect()->route('admin.kegiatan.index')->with('success', 'Kegiatan berhasil dihapus!');
    }
}
