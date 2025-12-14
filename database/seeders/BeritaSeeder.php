<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeritaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('beritas')->insert([
            [
                'judul' => 'Gotong Royong Mingguan Dimulai',
                'isi' => 'Kegiatan gotong royong rutin akan dimulai kembali setiap hari Minggu.',
                'penulis' => 'Admin Kegiatan',
                'tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Laporan Keuangan Bulan Ini Telah Dipublikasikan',
                'isi' => 'Laporan keuangan bulan Oktober sudah dapat diakses oleh seluruh anggota.',
                'penulis' => 'Admin Keuangan',
                'tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
