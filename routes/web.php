<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PemohonController;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\GedungController;
use App\Http\Controllers\User\DaftarGedungController;
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

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/peminjam', [PeminjamController::class, 'index'])->name('peminjam.index');
    Route::get('/peminjam/create', [PeminjamController::class, 'create'])->name('peminjam.create');
    Route::post('/peminjam', [PeminjamController::class, 'store'])->name('peminjam.store');
    Route::get('/peminjam/{id}/edit', [PeminjamController::class, 'edit'])->name('peminjam.edit');
    Route::put('/peminjam/{id}', [PeminjamController::class, 'update'])->name('peminjam.update');
    Route::delete('/peminjam/{id}', [PeminjamController::class, 'destroy'])->name('peminjam.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::get('/gedung', [GedungController::class, 'index'])->name('gedung.index');
    Route::get('/gedung/create', [GedungController::class, 'create'])->name('gedung.create');
    Route::post('/gedung', [GedungController::class, 'store'])->name('gedung.store');
    Route::get('/gedung/{id}/edit', [GedungController::class, 'edit'])->name('gedung.edit');
    Route::put('/gedung/{id}', [GedungController::class, 'update'])->name('gedung.update');
    Route::delete('/gedung/{id}', [GedungController::class, 'destroy'])->name('gedung.destroy');
});

Route::middleware('auth')->group(function () {
    Route::resource('peminjam', PeminjamController::class);
});

Route::get('/buildingnav', [DaftarGedungController::class, 'buildingnav'])->name('buildingnav');
// Route::get('/gedung/{id}', [GedungController::class, 'show'])->name('gedung.show');
Route::get('/get-building-details/{id}', [GedungController::class, 'getBuildingDetails']);

require __DIR__.'/auth.php';
