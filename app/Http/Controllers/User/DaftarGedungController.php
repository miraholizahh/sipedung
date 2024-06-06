<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Building;
use Illuminate\Http\Request;

class DaftarGedungController extends Controller
{
    public function buildingnav()
    {
        $gedung['buildings'] = Building::all();
        return view('buildingnav', $gedung);
    }

//     public function showBuildings()
// {
//     // Retrieve buildings from the database
//     $buildings = Building::all();

//     // Pass the buildings to the view
//     return view('buildingnav', compact('buildings'));
// }
}
