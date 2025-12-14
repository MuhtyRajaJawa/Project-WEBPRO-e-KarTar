<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggotas';   // SESUAIKAN DENGAN NAMA TABELMU
    protected $fillable = ['nama', 'jabatan', 'no_hp', 'alamat'];
}
