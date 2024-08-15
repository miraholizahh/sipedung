<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Building;
use App\Models\Borrow;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $building_count = Building::count();
        $borrow_count = Borrow::count();
        $user_count = User::where('name', '!=', 'admin')->count();
    
        return view('dashboard', compact('building_count', 'borrow_count', 'user_count'));
    }
}
