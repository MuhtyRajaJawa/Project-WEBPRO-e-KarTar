@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-body">

        {{-- HEADER & BUTTON --}}
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4><i class="ti ti-calendar text-primary"></i> Data Kegiatan</h4>

            <a href="{{ route('admin.kegiatan.create') }}" class="btn btn-primary">
                <i class="ti ti-plus"></i> 
            </a>
        </div>

        {{-- CUSTOM TABEL STYLE MIRIP GAMBAR --}}
        <div class="table-responsive">
            <table class="table align-middle">
                
                {{-- HEADER GELAP --}}
                <thead style="background-color:#152238; color:white;">
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Lokasi</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                {{-- ISI TABEL PUTIH --}}
                <tbody style="background:white;">
                    @foreach ($kegiatans as $i => $k)
                    <tr>
                        <td>{{ $i+1 }}</td>
                        <td>{{ $k->judul }}</td>
                        <td>{{ $k->tanggal_mulai }} s/d {{ $k->tanggal_selesai }}</td>
                        <td>{{ $k->lokasi }}</td>

                        {{-- BADGE WARNA STATUS --}}
                        <td>
                            @if($k->status == 'Rencana')
                                <span class="badge bg-warning text-dark">Rencana</span>
                            @elseif($k->status == 'Berjalan')
                                <span class="badge bg-info text-dark">Berjalan</span>
                            @else
                                <span class="badge bg-success">Selesai</span>
                            @endif
                        </td>

                        {{-- A K S I (TIDAK DIUBAH—CUMA TAMPILAN TABEL AJA) --}}
                        <td>
                            <a href="{{ route('admin.kegiatan.show', $k->id) }}" 
                               class="btn btn-info btn-sm">
                                Detail
                            </a>

                            <a href="{{ route('admin.kegiatan.edit', $k->id) }}" 
                               class="btn btn-warning btn-sm"><!--GANTI WARNA BUTTON DISINI JINK-->
                                Edit
                            </a>

                            <form action="{{ route('admin.kegiatan.destroy', $k->id) }}" 
                                  method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Hapus kegiatan ini?')" 
                                        class="btn btn-danger btn-sm"><!--GANTI WARNA BUTTON DISINI JINK-->
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

    </div>
</div>

@endsection
