<?php

namespace App\Http\Controllers;

use App\Models\Keuangan;
use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    // Tampilkan semua transaksi
    public function index()
    {
        $data = Keuangan::orderBy('tanggal', 'desc')->get();
        return view('admin.keuangan.index', compact('data'));
    }

    // Form tambah transaksi
    public function create()
    {
        return view('admin.keuangan.create');
    }

    // Proses tambah transaksi
    public function store(Request $request)
    {
        $request->validate([
            'keterangan' => 'required|string',
            'jumlah' => 'required|numeric',
            'tipe' => 'required|in:pemasukan,pengeluaran',
            'tanggal' => 'required|date',
        ]);

        Keuangan::create($request->all());

        return redirect()->route('admin.keuangan.index')
            ->with('success', 'Transaksi berhasil ditambahkan!');
    }

    // Form edit
    public function edit($id)
    {
        $data = Keuangan::findOrFail($id);
        return view('admin.keuangan.edit', compact('data'));
    }

    // Proses update
    public function update(Request $request, $id)
    {
        $request->validate([
            'keterangan' => 'required|string',
            'jumlah' => 'required|numeric',
            'tipe' => 'required|in:pemasukan,pengeluaran',
            'tanggal' => 'required|date',
        ]);

        $data = Keuangan::findOrFail($id);
        $data->update($request->all());

        return redirect()->route('admin.keuangan.index')
            ->with('success', 'Transaksi berhasil diperbarui!');
    }

    // Hapus transaksi
    public function destroy($id)
    {
        $data = Keuangan::findOrFail($id);
        $data->delete();

        return redirect()->route('admin.keuangan.index')
            ->with('success', 'Transaksi berhasil dihapus!');
    }
}
