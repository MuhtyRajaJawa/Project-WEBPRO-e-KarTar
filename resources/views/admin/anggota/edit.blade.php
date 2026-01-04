@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">

        <!-- Card -->
        <div class="card">
            <div class="card-body">

                <h4 class="card-title mb-4">
                    <i class="fa fa-edit text-primary"></i> Edit Anggota 
                </h4>

                <form action="{{ route('admin.anggota.update', $anggota->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Nama -->
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama"
                            value="{{ $anggota->nama }}" required>
                    </div>

                    <!-- Jabatan -->
                    <div class="mb-3">
                        <label class="form-label">Jabatan</label>
                        <input type="text" class="form-control" name="jabatan"
                            value="{{ $anggota->jabatan }}" required>
                    </div>

                    <!-- No HP -->
                    <div class="mb-3">
                        <label class="form-label">No HP</label>
                        <input type="text" class="form-control" name="no_hp"
                            value="{{ $anggota->no_hp }}">
                    </div>

                    <!-- Alamat -->
                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <textarea class="form-control" name="alamat" rows="3" required>{{ $anggota->alamat }}</textarea>
                    </div>

                    <!-- Tombol -->
                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ route('admin.anggota.index') }}" class="btn btn-secondary"><!--GANTI WARNA BUTTON KEMBALI DISINI JINK-->
                            <i class="fa fa-arrow-left"></i> Kembali<!--GANTI WARNA/TEKS/ICON DISINI JINK-->
                        </a>

                        <button type="submit" class="btn btn-primary"><!--GANTI WARNA BUTTON PERBARUI DATA DISINI JINK-->
                            <i class="fa fa-save"></i> Perbarui Data<!--GANTI WARNA/TEKS/ICON DISINI JINK-->
                        </button>
                    </div>

                </form>

            </div>
        </div>

    </div>
</div>
@endsection
