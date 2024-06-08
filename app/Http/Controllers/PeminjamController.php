<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PeminjamController extends Controller
{
    public function index()
    {
        $data['borrows'] = Borrow::all();
        return view('peminjam.index', $data);
    }

    public function create()
    {
        return view('peminjam.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'instansi' => 'required|string|max:255',
            'nama_gedung' => 'required|string|max:255',
            'agenda' => 'required|string|max:255',
            'tanggal_peminjaman' => 'required|date',
            'waktu_peminjaman' => 'required|date_format:H:i',
            'jumlah_peserta' => 'required|integer|max:255',
            'status' => 'required|boolean',
            'file' => 'nullable|file|mimes:jpeg,png,pdf|max:2048',
        ]);

        $fileName = null;

        if ($request->hasFile('file')) {
            $fileName = time() . '_' . $request->file('file')->getClientOriginalName();
            $request->file('file')->storeAs('uploads', $fileName); // Simpan file di folder storage/uploads
        }

        Borrow::create(array_merge($validatedData, ['file_path' => $fileName]));

        return redirect()->route('peminjam.index')->with('success', 'Data Peminjam berhasil disimpan');
    }

    public function edit($id)
    {
        $peminjam = Borrow::findOrFail($id);
        return view('peminjam.edit', compact('peminjam'));
    }

    public function update(Request $request, $id)
    {
        $borrow = Borrow::findOrFail($id);

        $validatedData = $request->validate([
            'instansi' => 'required|string|max:255',
            'nama_gedung' => 'required|string|max:255',
            'agenda' => 'required|string|max:255',
            'tanggal_peminjaman' => 'required|date',
            'waktu_peminjaman' => 'required|date_format:H:i',
            'jumlah_peserta' => 'required|integer|max:255',
            'status' => 'required|boolean',
            'file' => 'nullable|file|mimes:jpeg,png,pdf|max:2048',
        ]);

        if ($request->hasFile('file')) {
            $fileName = time() . '_' . $request->file('file')->getClientOriginalName();
            $request->file('file')->storeAs('uploads', $fileName); // Simpan file di folder storage/uploads

            // Hapus file lama jika ada
            if ($borrow->file_path) {
                Storage::delete('uploads/' . $borrow->file_path);
            }

            $borrow->file_path = $fileName;
        }

        $borrow->update($validatedData);

        return redirect()->route('peminjam.index')->with('success', 'Data Peminjam berhasil diperbarui');
    }

    public function destroy($id)
    {
        $borrow = Borrow::findOrFail($id);

        // Hapus file terkait jika ada
        if ($borrow->file_path) {
            Storage::delete('uploads/' . $borrow->file_path);
        }

        $borrow->delete();

        return redirect()->route('peminjam.index')->with('success', 'Data Peminjam berhasil dihapus');
    }
}
