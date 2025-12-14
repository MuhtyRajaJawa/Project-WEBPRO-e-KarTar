<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnggotaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('anggotas')->insert([
            [
                'nama' => 'Rizky Hidayat',
                'jabatan' => 'Ketua',
                'rt' => '01',
                'no_hp' => '081234567890',
                'alamat' => 'Jl. Melati No.10',
                'status' => 'Aktif',
                'tanggal_gabung' => now()->subYears(2),
                'foto' => null,
                'qr_code' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Siti Nurhaliza',
                'jabatan' => 'Sekretaris',
                'rt' => '02',
                'no_hp' => '081234567891',
                'alamat' => 'Jl. Kenanga No.7',
                'status' => 'Aktif',
                'tanggal_gabung' => now()->subYear(),
                'foto' => null,
                'qr_code' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
