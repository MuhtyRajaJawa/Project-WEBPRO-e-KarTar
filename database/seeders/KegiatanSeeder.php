<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KegiatanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('kegiatans')->insert([
            [
                'judul' => 'Kerja Bakti Lingkungan',
                'deskripsi' => 'Membersihkan area sekitar RT 01 setiap minggu.',
                'tanggal_mulai' => now()->addDays(7),
                'tanggal_selesai' => now()->addDays(7),
                'lokasi' => 'Lapangan RW 03',
                'kuota' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Rapat Bulanan Karang Taruna',
                'deskripsi' => 'Pembahasan kegiatan sosial bulan depan.',
                'tanggal_mulai' => now()->addDays(15),
                'tanggal_selesai' => now()->addDays(15),
                'lokasi' => 'Balai Warga',
                'kuota' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
