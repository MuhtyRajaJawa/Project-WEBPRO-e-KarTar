@extends('layouts.admin')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-10">

        <div class="card">
            <div class="card-body">

                <h4><i class="ti ti-calendar-plus text-primary"></i> Tambah Kegiatan Baru</h4>

                <form action="{{ route('admin.kegiatan.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Judul</label>
                        <input type="text" name="judul" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="3" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tanggal Mulai</label>
                        <input type="date" name="tanggal_mulai" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tanggal Selesai</label>
                        <input type="date" name="tanggal_selesai" class="form-control" required><!--GANTI TANGGAL JADI TEKS "DATE" GANTI "TEXT"-->
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Lokasi</label>
                        <input type="text" name="lokasi" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status</label><!--GANTI TEKS STATUS DISINI-->
                        <select name="status" class="form-control">
                            <option value="Rencana">Rencana</option>
                            <option value="Berjalan">Berjalan</option>
                            <option value="Selesai">Selesai</option>
                        </select>
                    </div>

                    <div class="d-flex justify-content-between">

                        <a href="{{ route('admin.kegiatan.index') }}" class="btn btn-secondary"><!--GANTI TEKS/ICON DISINI-->
                            Kembali
                        </a>

                        <button type="submit" class="btn btn-primary">Simpan</button><!--GANTI TEKS/ICON DISINI-->

                    </div>
                </form>

            </div>
        </div>

    </div>
</div>

@endsection
