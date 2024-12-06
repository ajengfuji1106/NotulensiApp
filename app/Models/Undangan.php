<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Undangan extends Model
{
    use HasFactory;
    // Tentukan kolom-kolom yang dapat diisi secara massal
    protected $fillable = [
        'nomor',
        'perihal',
        'lampiran',
        'kepada',
        'tanggal',
        'waktu',
        'tempat',
        'agenda'
    ];

    // Konversi kolom 'agenda' ke format array saat diambil dari database
    protected $casts = [
        'agenda' => 'array',
        'tanggal' => 'date',
    ];
}
