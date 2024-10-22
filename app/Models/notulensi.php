<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notulensi extends Model
{
    use HasFactory;

    protected $fillable = [
        'hari_tanggal',
        'ruang_rapat',
        'waktu',
        'surat_undangan',
        'tipe_rapat',
        'file_path', 
        'message',
    ];
}
