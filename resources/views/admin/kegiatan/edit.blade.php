@extends('layouts.admin')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">

        <div class="card">
            <div class="card-body">

                <h3 class="fw-bold mb-4 text-center">
                    <i class="ti ti-edit text-warning me-2"></i>
                    Edit Kegiatan
                </h3>

                <form action="{{ route('admin.kegiatan.update', $kegiatan->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Judul</label>
                        <input type="text" name="judul" class="form-control"
                               value="{{ $kegiatan->judul }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="3" required>{{ $kegiatan->deskripsi }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Tanggal Mulai</label>
                        <input type="date" name="tanggal_mulai" class="form-control"
                               value="{{ $kegiatan->tanggal_mulai }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Tanggal Selesai</label>
                        <input type="date" name="tanggal_selesai" class="form-control"
                               value="{{ $kegiatan->tanggal_selesai }}" required><!--GANTI TANGGAL JADI TEKS "DATE" GANTI "TEXT" DISINI YAWW-->
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Lokasi</label>
                        <input type="text" name="lokasi" class="form-control"
                               value="{{ $kegiatan->lokasi }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Status</label><!--GANTI TEKS STATUS DISINI YAA-->
                        <select name="status" class="form-select">
                            <option value="Rencana" {{ $kegiatan->status == 'Rencana' ? 'selected' : '' }}>Rencana</option>
                            <option value="Berjalan" {{ $kegiatan->status == 'Berjalan' ? 'selected' : '' }}>Berjalan</option>
                            <option value="Selesai" {{ $kegiatan->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                        </select>
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ route('admin.kegiatan.index') }}" class="btn btn-secondary"><!--GANTI TEKS/ICON DISINI YAWW-->
                            <i class="ti ti-arrow-left me-1"></i> Kembali
                        </a>

                        <button type="submit" class="btn btn-warning text-white">
                            <i class="ti ti-check me-1"></i> Perbarui
                        </button>
                    </div>

                </form>

            </div>
        </div>

    </div>
</div>
@endsection
