<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaporanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('laporans')->insert([
            [
                'nama_warga' => 'Andi Prasetyo',
                'judul' => 'Lampu Jalan Mati',
                'isi' => 'Lampu jalan di depan rumah saya sudah mati selama 3 hari.',
                'status' => 'Belum Diproses',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_warga' => 'Fitri Handayani',
                'judul' => 'Sampah Menumpuk',
                'isi' => 'Tempat sampah di RT 02 sudah penuh dan belum diangkut.',
                'status' => 'Sudah Diproses',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
