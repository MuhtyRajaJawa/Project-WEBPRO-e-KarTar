@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                {{-- Judul Sambutan --}}
                <div class="text-center mb-4">
                    <h2 class="mb-2">Selamat Datang di E-KarTar</h2>
                    <p class="mb-3">
                        Kelola data Anggota, Kegiatan, Keuangan, Laporan, dan Berita melalui menu di sidebar.
                    </p>
                </div>

                {{-- Tabel Visi & Misi --}}
                <h4 class="mb-3 text-center">Visi & Misi</h4>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-light text-center">
                            <tr>
                                <th style="width: 50%;">Visi</th>
                                <th style="width: 50%;">Misi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-top">
                                    Mewujudkan pemuda Karang Taruna yang aktif, kreatif, dan peduli
                                    terhadap pembangunan teknologi sosial di lingkungan masyarakat.
                                </td>
                                <td class="align-top">
                                    <ul class="mb-0">
                                        <li>Mengembangkan potensi dan bakat pemuda melalui kegiatan positif.</li>
                                        <li>Menumbuhkan rasa kepedulian sosial dan gotong royong di masyarakat.</li>
                                        <li>Menjadi mitra pemerintah dan lembaga lainnya dalam program pemberdayaan pemuda.</li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

