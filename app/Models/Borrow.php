<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Roles;

class Borrow extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'instansi',
        'nama_gedung',
        'agenda',
        'tanggal_peminjaman',
        'waktu_peminjaman',
        'jumlah_peserta',
        'status',
        'file_path', // Memperbaiki penulisan kolom
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function roles(){
        return $this->belongsTo(Roles::class, 'idRole');
    }
    
    public function hasRole($role)
    {
        return $this->roles->name === $role;
    }
}

