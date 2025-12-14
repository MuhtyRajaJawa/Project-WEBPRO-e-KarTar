@extends('layouts.admin')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">

        {{-- Card Utama --}}
        <div class="card">
            <div class="card-body">

                {{-- Header --}}
                <div class="text-center mb-4">
                    <h3 class="fw-bold">
                        <i class="ti ti-user-plus text-success me-2"></i>
                        Tambah Anggota Baru
                    </h3>
                </div>

                {{-- Form --}}
                <form action="{{ route('admin.anggota.store') }}" method="POST">
                    @csrf

                    {{-- Nama --}}
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan nama anggota" required>
                    </div>

                    {{-- Jabatan --}}
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" placeholder="Masukkan jabatan" required>
                    </div>

                    {{-- No HP --}}
                    <div class="mb-3">
                        <label class="form-label fw-semibold">No HP</label>
                        <input type="text" name="no_hp" class="form-control" placeholder="Masukkan nomor HP" required>
                    </div>

                    {{-- Alamat --}}
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Alamat</label>
                        <textarea name="alamat" rows="3" class="form-control" placeholder="Masukkan alamat lengkap" required></textarea>
                    </div>

                    {{-- Tanggal Gabung (Manual) --}}
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Tanggal Gabung</label>
                        <input type="text" name="tanggal_gabung" class="form-control" placeholder="Contoh: 2024-10-12" required>
                    </div>

                    {{-- Tombol --}}
                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ route('admin.anggota.index') }}" class="btn btn-secondary d-flex align-items-center">
                            <i class="ti ti-arrow-left me-1"></i> Kembali<!--GANTI TEKS/ICON DISINI JINK-->
                        </a>

                        <button type="submit" class="btn btn-success d-flex align-items-center">
                            <i class="ti ti-plus me-1"></i> Tambah<!--GANTI TEKS/ICON DISINI JINK-->
                        </button>
                    </div>

                </form>

            </div>
        </div>

    </div>
</div>
@endsection
