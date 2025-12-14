<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    protected $table = 'keuangans'; // atau keuangan (cek nama tabelmu)

    protected $fillable = [
        'keterangan',
        'jumlah',
        'tipe',
        'tanggal'
    ];
}
