<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PemohonController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/profilenav', function () {
    return view('profilenav');
});

Route::get('/homenav', function () {
    return view('homenav');
});

Route::get('/contactnav', function () {
    return view('contactnav');
});

Route::get('/buildingnav', function () {
    return view('buildingnav');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::get('/pemohon', [PemohonController::class, 'index'])->name('pemohon.index');
    Route::get('/pemohon/create', [PemohonController::class, 'create'])->name('pemohon.create');
    Route::post('/pemohon', [PemohonController::class, 'store'])->name('pemohon.store');
    Route::get('/pemohon/{id}/edit', [PemohonController::class, 'edit'])->name('pemohon.edit');
    Route::put('/pemohon/{id}', [PemohonController::class, 'update'])->name('pemohon.update');
    Route::delete('/pemohon/{id}', [PemohonController::class, 'destroy'])->name('pemohon.destroy');

});


require __DIR__.'/auth.php';
