@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-body">

        <h4><i class="fa fa-plus-circle me-2"></i> Tambah Transaksi</h4><!--GANTI TEKS/ICON DISINI YAWW-->
        <hr>

        <form action="{{ route('admin.keuangan.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Keterangan</label>
                <input type="text" name="keterangan" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Jumlah</label>
                <input type="number" name="jumlah" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Tipe</label><!--GANTI INFO DISINI YAWW-->
                <select name="tipe" class="form-select">
                    <option value="pemasukan">Pemasukan</option>
                    <option value="pengeluaran">Pengeluaran</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Tanggal</label>
                <input type="date" name="tanggal" class="form-control"><!--GANTI TANGGAL JADI TEKS "DATE" GANTI "TEXT" DISINI YAWW-->
            </div>

            <button class="btn btn-success"><!--GANTI TEKS/ICON DISINI YAWW-->
                <i class="fa fa-save me-2"></i> Simpan
            </button>

        </form>
    </div>
</div>
@endsection
