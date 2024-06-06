<?php
namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\roles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GedungController extends Controller
{
    public function index()
    {
        $gedung['buildings'] = Building::all();
        return view('gedung.index', $gedung);
    }

    public function create()
    {
        return view('gedung.create');
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'nama_gedung' => 'required|string|max:255',
        'tanggal_peminjaman' => 'required|date',
        'kapasitas' => 'required|integer|max:255',
        'fasilitas' => 'required|string|max:255',
        'status' => 'required|boolean',
        'foto' => 'nullable|image',
    ]);

    if ($request->hasFile('foto')) {
        $path = $request->file('foto')->storeAs(
            'public/foto_gedung',
            'foto_' . time() . '.' . $request->file('foto')->extension()
        );
        $validatedData['foto'] = basename($path);
    }

    Building::create($validatedData);

    return redirect()->route('gedung.index')->with('success', 'Data Gedung berhasil ditambahkan');
}


    public function edit($id)
    {
        $gedung = Building::findOrFail($id);
        return view('gedung.edit', compact('gedung'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_gedung' => 'required|string|max:255',
            'tanggal_peminjaman' => 'required|date',
            'kapasitas' => 'required|integer|max:255',
            'fasilitas' => 'required|string|max:255',
            'status' => 'required|integer',
            'foto' => 'nullable|image',
        ]);
    
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->storeAs(
            'public/foto_gedung',
            'foto_' . time() . '.' . $request->file('foto')->extension()
            );
            $validatedData['foto'] = basename($path);
        }
    
        Building::where('id', $id)->update($validatedData);
    
        return redirect()->route('gedung.index')->with('success', 'Data Gedung berhasil diperbarui');
    }

    public function destroy(string $id)
    {

        $building = Building::findOrFail($id);
        if ($building->foto){
            Storage::delete('public/foto_gedung/' . $building->foto);
        }
        $building->delete();

        return redirect()->route('gedung.index')->with('success', 'Data Gedung berhasil dihapus');
    }
}
