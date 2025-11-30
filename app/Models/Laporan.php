<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_warga',
        'judul',
        'isi_laporan',
        'status', // contoh: 'Menunggu', 'Diproses', 'Selesai'
        'tanggal',
    ];

    public $timestamps = true;
}
