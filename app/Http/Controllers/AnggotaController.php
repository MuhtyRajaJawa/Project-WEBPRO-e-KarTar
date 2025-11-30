<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    // 🧾 Tampilkan daftar anggota
    public function index()
    {
        $anggotas = Anggota::orderBy('id', 'desc')->get();
        return view('admin.anggota.index', compact('anggotas'));
    }

    // ➕ Tampilkan form tambah anggota
    public function create()
    {
        return view('admin.anggota.create');
    }

    // 💾 Proses simpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
            'alamat' => 'required|string|max:255',
        ]);

        Anggota::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'rt' => '01', // default
            'status' => 'Aktif',
            'tanggal_gabung' => now()->format('Y-m-d'),
        ]);

        return redirect()->route('admin.anggota.index')
                         ->with('success', '✅ Data anggota berhasil ditambahkan!');
    }

    // ✏️ Edit anggota
    public function edit($id)
    {
        $anggota = Anggota::findOrFail($id);
        return view('admin.anggota.edit', compact('anggota'));
    }

    // 🔄 Update data anggota
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
            'alamat' => 'required|string|max:255',
        ]);

        $anggota = Anggota::findOrFail($id);
        $anggota->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('admin.anggota.index')->with('success', 'Data anggota diperbarui!');
    }

    // ❌ Hapus anggota
    public function destroy($id)
    {
        Anggota::destroy($id);
        return redirect()->route('admin.anggota.index')->with('success', 'Anggota berhasil dihapus!');
    }
}
