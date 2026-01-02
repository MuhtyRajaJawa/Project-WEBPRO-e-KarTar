@extends('layouts.admin')

@section('content')

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <i class="fa fa-check-circle me-2"></i>{{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
@endif

<div class="card">
    <div class="card-body">
        
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4><i class="fa fa-wallet me-2"></i> Data Keuangan</h4>

            <a href="{{ route('admin.keuangan.create') }}" class="btn btn-primary"><!--GANTI WARNA DISINI-->
                <i class="fa fa-plus-circle me-1"></i> Tambah Transaksi<!--GANTI TEKS/ICON disini-->
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark"><!--GANTI WARNA TABEL BIRU TUA DISINI-->
                    <tr class="text-center">
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Keterangan</th>
                        <th>Jumlah</th>
                        <th>Tipe</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($data as $i => $d)
                    <tr>
                        <td class="text-center">{{ $i+1 }}</td>
                        <td class="text-center">{{ $d->tanggal }}</td>
                        <td>{{ $d->keterangan }}</td>
                        <td class="text-end">Rp {{ number_format($d->jumlah, 0, ',', '.') }}</td>

                        <td class="text-center">
                            @if($d->tipe == 'pemasukan')
                                <span class="badge bg-success">Pemasukan</span><!--GANTI WARNA/INFO DISINI-->
                            @else
                                <span class="badge bg-danger">Pengeluaran</span><!--GANTI WARNA/INFO DISINI-->
                            @endif
                        </td>

                        <td class="text-center">
                            <a href="{{ route('admin.keuangan.edit', $d->id) }}" class="btn btn-warning btn-sm"><!--GANTI WARNA DISINI-->
                                <i class="fa fa-edit"></i><!--GANTI TEKS/ICON DISINI-->
                            </a>

                            <form action="{{ route('admin.keuangan.destroy', $d->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus transaksi ini?')"><!--GANTI WARNA DISINI-->
                                    <i class="fa fa-trash"></i><!--GANTI TEKS/ICON DISINI-->
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
