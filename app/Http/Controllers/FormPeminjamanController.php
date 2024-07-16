<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    $formpeminjaman = new FormPeminjaman();
    $formpeminjaman->instansi = $validated['instansi'];
    $formpeminjaman->nama_gedung = $validated['nama_gedung'];
    $formpeminjaman->agenda = $validated['agenda'];
    $formpeminjaman->tanggal_peminjaman = $validated['tanggal_peminjaman'];
    $formpeminjaman->waktu_peminjaman = $validated['waktu_peminjaman'];
    $formpeminjaman->jumlah_peserta = $validated['jumlah_peserta'];
    $formpeminjaman->status = 'Menunggu';
    $formpeminjaman->file = $validated['file'];
    $formpeminjaman->save();

    return redirect()->route('formpeminjaman.form')->with('success', 'Peminjaman berhasil dilakukan');
   }
}


