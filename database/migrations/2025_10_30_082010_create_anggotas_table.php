<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
{
    Schema::create('anggotas', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('jabatan')->nullable();   // ketua, wakil, dll
        $table->string('no_hp')->nullable();
        $table->string('alamat')->nullable();
        $table->timestamps();
    });
}


    public function down(): void {
        Schema::dropIfExists('anggotas');
    }
};
