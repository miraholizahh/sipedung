<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PemohonController extends Controller
{
    public function index()
    {
        $pemohon = User::all();
        return view('pemohon.index', ['pemohons' => $pemohon]);
    }

    public function create()
    {
        return view('pemohon.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'nik' => 'required|numeric|digits:16',
            'email' => 'required|string|email|max:255|unique:users,email',
            'telepon' => 'required|numeric|digits_between:10,15',
            'password' => 'required|confirmed|min:8',
            'status' => 'required|boolean',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
    
        User::create($validatedData);
    
        return redirect()->route('pemohon.index')->with('success', 'Akun berhasil dibuat.');
    }

    public function edit($id)
    {
        $pemohon = User::findOrFail($id);
        return view('pemohon.edit', compact('pemohon'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            // 'name' => 'required|string|max:255',
            // 'nik' => 'required|numeric|digits:16',
            // 'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            // 'telepon' => 'required|numeric|digits_between:10,15',
            // 'password' => 'nullable|confirmed|min:8',
            'status' => 'required|boolean',
        ]);

        if ($request->filled('password')) {
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }
    
        User::where('id', $id)->update($validated);
    
        return redirect()->route('pemohon.index')->with('success', 'Data User berhasil diperbarui');
    }

    public function destroy($id)
    {
        $pemohon = User::findOrFail($id);
        $pemohon->delete();

        return redirect()->route('pemohon.index')->with('success', 'Data User berhasil dihapus');
    }
}
