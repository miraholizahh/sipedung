<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Roles;

class Building extends Model
{
    use HasFactory;
    protected $tabel = 'buildings';
    protected $fillable = [
        'nama_gedung',
        'tanggal_peminjaman',
        'kapasitas',
        'fasilitas',
        'status',
        'foto',
    ];

    public function roles(){
        return $this->belongsTo(Roles::class, 'idRole');
    }
    
    public function hasRole($role)
    {
        return $this->roles->name === $role;
    }

    public static function getDataAccounts()
    {
        $building = Building::all();
        $building_filtur = [];

        $no = 1;
        for ($i = 0; $i < $building->count(); $i++) {
            $building_filtur[$i]['no'] = $no++;
            $building_filtur[$i]['nama_gedung'] = $building[$i]->nama_gedung;
            $building_filtur[$i]['tanggal_peminjaman'] = $building[$i]->tanggal_peminjaman;
            $building_filtur[$i]['kapasitas'] = $building[$i]->kapasitas;
            $building_filtur[$i]['fasilitas'] = $building[$i]->fasilitas;
            $building_filtur[$i]['status'] = $building[$i]->status;
            $building_filtur[$i]['foto'] = $building[$i]->foto;
        }
        return $building_filtur;
    }
}
