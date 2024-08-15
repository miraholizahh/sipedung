<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\FormPeminjaman;

class FormPeminjamanController extends Controller
{
   public function formpeminjaman()
   {
    return view('formpeminjaman.form') ;
   }

   public function store(Request $request)
   {
    $validated = $request->validate([
        'instansi' => 'required|string|max:255',
        'nama_gedung' => 'required|string|max:255',
        'agenda' => 'required|string|max:255',
        'tanggal_peminjaman' => 'required|date',
        'waktu_peminjaman' => 'required|date_format:H:i',
        'jumlah_peserta' => 'required|integer|max:255',
        'status' => 'required|boolean',
        'file' => 'nullable|file|mimes:jpeg,png,pdf|max:2048',
    ]);

    var_dump(Auth::user()->id);

    $formpeminjaman = new FormPeminjaman();
    $formpeminjaman->instansi = $validated['instansi'];
    $formpeminjaman->nama_gedung = $validated['nama_gedung'];
    $formpeminjaman->agenda = $validated['agenda'];
    $formpeminjaman->tanggal_peminjaman = $validated['tanggal_peminjaman'];
    $formpeminjaman->waktu_peminjaman = $validated['waktu_peminjaman'];
    $formpeminjaman->jumlah_peserta = $validated['jumlah_peserta'];
    $formpeminjaman->status = false;
    $formpeminjaman->file_path = $validated['file'];
    $formpeminjaman->user_id = Auth::user()->id;
    $formpeminjaman->save();

    return redirect()->route('formpeminjaman.status')->with('success', 'Peminjaman berhasil dilakukan');
   }

   public function status()
   {
    $user = Auth::user();
    $data['peminjaman']=FormPeminjaman::where('user_id', $user->id)->get();
    
    return view('formpeminjaman.status',$data) ;
   }
}


