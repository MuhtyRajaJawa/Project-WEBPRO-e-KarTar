@extends('layouts.admin')

@section('content')

<div class="row">

    {{-- Card Total Pemasukan --}}
    <div class="col-md-4">
        <div class="card bg-success text-white">
            <div class="card-body">
                <h5 class="card-title"><i class="fa fa-arrow-down me-2"></i> Total Pemasukan</h5>
                <h3>Rp {{ number_format($pemasukan, 0, ',', '.') }}</h3>
            </div>
        </div>
    </div>

    {{-- Card Total Pengeluaran --}}
    <div class="col-md-4">
        <div class="card bg-danger text-white">
            <div class="card-body">
                <h5 class="card-title"><i class="fa fa-arrow-up me-2"></i> Total Pengeluaran</h5>
                <h3>Rp {{ number_format($pengeluaran, 0, ',', '.') }}</h3>
            </div>
        </div>
    </div>

    {{-- Card Saldo Akhir --}}
    <div class="col-md-4">
        <div class="card bg-primary text-white">
            <div class="card-body">
                <h5 class="card-title"><i class="fa fa-wallet me-2"></i> Saldo Akhir</h5>
                <h3>Rp {{ number_format($saldo, 0, ',', '.') }}</h3>
            </div>
        </div>
    </div>

</div>

{{-- TABEL TRANSAKSI TERBARU --}}
<div class="card mt-4">
    <div class="card-body">
        <h4 class="mb-3"><i class="fa fa-history me-2"></i> Transaksi Terbaru</h4>

        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th>Tanggal</th>
                        <th>Keterangan</th>
                        <th>Jumlah</th>
                        <th>Tipe</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($recent as $item)
                    <tr>
                        <td>{{ $item->tanggal }}</td>
                        <td>{{ $item->keterangan }}</td>
                        <td class="text-end">Rp {{ number_format($item->jumlah, 0, ',', '.') }}</td>

                        <td class="text-center">
                            @if($item->tipe == 'pemasukan')
                                <span class="badge bg-success">Pemasukan</span>
                            @else
                                <span class="badge bg-danger">Pengeluaran</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>

@endsection
