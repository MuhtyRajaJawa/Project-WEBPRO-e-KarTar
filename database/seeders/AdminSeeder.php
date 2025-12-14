<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    public function run()
    {
        User::updateOrCreate(
            ['email' => 'admin@test.com'], // cek berdasarkan email
            [
                'name' => 'Admin',
                'password' => bcrypt('123456'), // password: 123456
            ]
        );
    }
}
