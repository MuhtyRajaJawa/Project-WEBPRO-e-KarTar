<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUserCommand extends Command
{
    protected $signature = 'buat:user';
    protected $description = 'Buat user baru dari terminal';

    public function handle()
    {
        $name = $this->ask('Masukkan Nama');
        $email = $this->ask('Masukkan Email');
        $password = $this->secret('Masukkan Password');

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ]);

        $this->info('User berhasil dibuat!');
        $this->info("Name : $user->name");
        $this->info("Email: $user->email");

        return Command::SUCCESS;
    }
}