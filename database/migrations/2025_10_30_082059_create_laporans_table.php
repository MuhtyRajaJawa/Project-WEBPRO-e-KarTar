<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('isi')->nullable();
            $table->string('nama_warga')->nullable(); // 🔹 Tambahkan ini
            $table->enum('status', ['Belum Diproses', 'Sedang Diproses', 'Sudah Diproses'])->default('Belum Diproses');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('laporans');
    }
};
