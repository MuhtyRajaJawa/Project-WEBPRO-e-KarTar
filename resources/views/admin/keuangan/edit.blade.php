@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-body">

        <h4><i class="fa fa-edit me-2"></i>Edit Transaksi</h4>
        <hr>

        <form action="{{ route('admin.keuangan.update', $data->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Keterangan</label>
                <input type="text" name="keterangan" value="{{ $data->keterangan }}" class="form-control">
            </div>

            <div class="mb-3">
                <label>Jumlah</label>
                <input type="number" name="jumlah" value="{{ $data->jumlah }}" class="form-control">
            </div>

            <div class="mb-3">
                <label>Tipe</label>
                <select name="tipe" class="form-select"><!--ganti info-->
                    <option value="pemasukan" {{ $data->tipe == 'pemasukan'?'selected':'' }}>Pemasukan</option>
                    <option value="pengeluaran" {{ $data->tipe == 'pengeluaran'?'selected':'' }}>Pengeluaran</option>
                </select>
            </div>

            <div class="mb-3">
                <label>Tanggal</label>
                <input type="date" name="tanggal" value="{{ $data->tanggal }}" class="form-control"><!--ganti tanggal jd teks 'date, ganti 'text' disini-->
            </div>

            <button class="btn btn-primary"><!--ganti teks/iconnya-->
                <i class="fa fa-save me-2"></i> Update
            </button>

        </form>

    </div>
</div>
@endsection
