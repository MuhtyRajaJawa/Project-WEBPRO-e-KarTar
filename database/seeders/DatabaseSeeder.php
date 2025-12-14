<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            AnggotaSeeder::class,
            KegiatanSeeder::class,
            KeuanganSeeder::class,
            LaporanSeeder::class,
            BeritaSeeder::class,
        ]);
    }

}
