<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormPeminjaman extends Model
{
    use HasFactory;

    protected $fillable = [
        'instansi',
        'nama_gedung',
        'agenda',
        'tanggal_peminjaman',
        'waktu_peminjaman',
        'jumlah_peserta',
        'status',
        'file_path', // Memperbaiki penulisan kolom
    ];

    protected $table = "borrows";
}
