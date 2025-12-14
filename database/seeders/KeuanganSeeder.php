<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeuanganSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('keuangans')->insert([
            [
                'keterangan' => 'Dana Sosial Bulanan',
                'jumlah' => 500000,
                'tipe' => 'Pemasukan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'keterangan' => 'Pembelian Peralatan Kebersihan',
                'jumlah' => 200000,
                'tipe' => 'Pengeluaran',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
