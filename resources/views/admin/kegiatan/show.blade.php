@extends('layouts.admin')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-8">

        <div class="card shadow-sm border-0">
            <div class="card-body">

                {{-- Header --}}
                <div class="d-flex align-items-center mb-4">
                    <i class="ti ti-clipboard-text fs-3 text-info me-2"></i>
                    <h4 class="mb-0 fw-bold">Detail Kegiatan</h4>
                </div>

                {{-- Isi Detail --}}
                <div class="mb-3">
                    <label class="fw-semibold text-dark">Judul Kegiatan</label>
                    <p class="form-control bg-light">{{ $kegiatan->judul }}</p>
                </div>

                <div class="mb-3">
                    <label class="fw-semibold text-dark">Deskripsi</label>
                    <p class="form-control bg-light" style="min-height: 80px;">{{ $kegiatan->deskripsi }}</p>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="fw-semibold text-dark">Tanggal Mulai</label>
                        <p class="form-control bg-light">{{ $kegiatan->tanggal_mulai }}</p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="fw-semibold text-dark">Tanggal Selesai</label>
                        <p class="form-control bg-light">{{ $kegiatan->tanggal_selesai }}</p>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="fw-semibold text-dark">Lokasi</label>
                    <p class="form-control bg-light">{{ $kegiatan->lokasi }}</p>
                </div>

                <div class="mb-4">
                    <label class="fw-semibold text-dark">Status</label>
                    <p class="form-control bg-light">{{ $kegiatan->status }}</p>
                </div>

                {{-- Tombol Aksi --}}
                <div class="d-flex justify-content-between">

                    {{-- Kembali --}}
                    <a href="{{ route('admin.kegiatan.index') }}" class="btn btn-secondary d-flex align-items-center"><!--GANTI TEKS/ICON DISINI YAWW-->
                        <i class="ti ti-arrow-left me-1"></i> Kembali
                    </a>

                    {{-- Edit --}}
                    <a href="{{ route('admin.kegiatan.edit', $kegiatan->id) }}"
                       class="btn btn-warning text-white d-flex align-items-center"><!--GANTI TEKS/ICON DISINI YAWW-->
                        <i class="ti ti-edit me-1"></i> Edit
                    </a>

                </div>

            </div>
        </div>

    </div>
</div>

@endsection
