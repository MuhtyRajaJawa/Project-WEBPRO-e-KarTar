@extends('admin.layout')

@section('content')
<h1 class="text-2xl font-bold mb-4">Daftar Kegiatan</h1>

<form action="{{ url('/admin/kegiatan') }}" method="POST" class="bg-white p-4 rounded shadow mb-4">
    @csrf
    <div class="grid grid-cols-2 gap-4">
        <input type="text" name="judul" placeholder="Judul Kegiatan" class="border p-2 rounded" required>
        <input type="text" name="lokasi" placeholder="Lokasi" class="border p-2 rounded">
        <textarea name="deskripsi" placeholder="Deskripsi" class="border p-2 rounded col-span-2"></textarea>
        <div>
            <label>Tanggal Mulai</label>
            <input type="date" name="tanggal_mulai" class="border p-2 rounded w-full">
        </div>
        <div>
            <label>Tanggal Selesai</label>
            <input type="date" name="tanggal_selesai" class="border p-2 rounded w-full">
        </div>
    </div>
    <button class="mt-3 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Tambah</button>
</form>

<table class="w-full bg-white rounded shadow">
    <thead>
        <tr class="bg-blue-600 text-white">
            <th class="p-2">No</th>
            <th class="p-2">Judul</th>
            <th class="p-2">Tanggal</th>
            <th class="p-2">Lokasi</th>
            <th class="p-2">Status</th>
            <th class="p-2">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $i => $k)
        <tr class="border-b">
            <td class="p-2 text-center">{{ $i+1 }}</td>
            <td class="p-2">{{ $k->judul }}</td>
            <td class="p-2">{{ $k->tanggal_mulai }} - {{ $k->tanggal_selesai }}</td>
            <td class="p-2">{{ $k->lokasi }}</td>
            <td class="p-2">{{ $k->status }}</td>
            <td class="p-2 text-center">
                <a href="{{ url('/admin/kegiatan/delete/'.$k->id) }}" class="text-red-600 hover:underline">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
