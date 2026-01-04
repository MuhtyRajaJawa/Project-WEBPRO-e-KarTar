@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-12">

        <div class="card shadow-sm">
            <div class="card-body">

                {{-- Header --}}
                <div class="d-flex align-items-center mb-3">
                    <i class="ti ti-users fs-3 text-info me-2"></i>
                    <h4 class="mb-0 text-info">DATA ANGGOTA KARTAR</h4> 
                </div>

                {{-- Tombol Tambah --}}
                <div class="mb-3">
                    <a href="{{ route('admin.anggota.create') }}" class="btn btn-primary"> 
                        <i class="ti ti-user-plus me-1"></i> Tambah Anggota Baru
                    </a>
                </div>

                {{-- ============================== --}}
                {{-- TABEL PENGURUS INTI --}}
                {{-- ============================== --}}
                <h5 class="text-primary fw-bold mb-2">PENGURUS INTI</h5>

                <div class="table-responsive mb-4">
                    <table class="table align-middle mb-0">
                        <thead style="background-color: #102A43; color:#fff;">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>No HP</th>
                                <th>Alamat</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>

                        <tbody style="background-color: #ffffff;">
                            @forelse ($pengurus as $i => $p)
                            <tr>
                                <td>{{ $i + 1 }}</td>
                                <td>{{ $p->nama }}</td>
                                <td><b class="text-primary">{{ $p->jabatan }}</b></td>
                                <td>{{ $p->no_hp }}</td>
                                <td>{{ $p->alamat }}</td>

                                <td class="text-center">
                                    <a href="{{ route('admin.anggota.edit', $p->id) }}" class="btn btn-info btn-sm">
                                        <i class="ti ti-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('admin.anggota.destroy', $p->id) }}" 
                                        method="POST" class="d-inline">
                                        @csrf @method('DELETE')
                                        <button onclick="return confirm('Hapus?')" class="btn btn-danger btn-sm">
                                            <i class="ti ti-trash"></i> Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr><td colspan="6" class="text-center">Belum ada data pengurus.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                {{-- ============================== --}}
                {{-- TABEL ANGGOTA BIASA --}}
                {{-- ============================== --}}
                <h5 class="text-primary fw-bold mb-2">ANGGOTA KARTAR</h5>

                <div class="table-responsive">
                    <table class="table align-middle mb-0">
                        <thead style="background-color: #102A43; color:#fff;">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>No HP</th>
                                <th>Alamat</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>

                        <tbody style="background-color: #ffffff;">
                            @forelse ($anggota as $i => $a)
                            <tr>
                                <td>{{ $i + 1 }}</td>
                                <td>{{ $a->nama }}</td>
                                <td>{{ $a->jabatan }}</td>
                                <td>{{ $a->no_hp }}</td>
                                <td>{{ $a->alamat }}</td>

                                <td class="text-center">
                                    <a href="{{ route('admin.anggota.edit', $a->id) }}" class="btn btn-info btn-sm">
                                        <i class="ti ti-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('admin.anggota.destroy', $a->id) }}" 
                                        method="POST" class="d-inline">
                                        @csrf @method('DELETE')
                                        <button onclick="return confirm('Hapus?')" class="btn btn-danger btn-sm">
                                            <i class="ti ti-trash"></i> Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr><td colspan="6" class="text-center">Belum ada data anggota.</td></tr>
                            @endforelse
                        </tbody>

                    </table>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection
