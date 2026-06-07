<?php

namespace App\Http\Controllers;

use App\Models\Family;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FamilyController extends Controller
{
    /**
     * Menampilkan daftar data keluarga
     */
    public function index()
    {
        $families = Family::latest()->get();

        return view('families.index', compact('families'));
    }

    /**
     * Menampilkan form tambah data
     */
    public function create()
    {
        return view('families.create');
    }

    /**
     * Menyimpan data ke database
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kk' => 'required',
            'nik' => 'required|unique:families',
            'alamat' => 'required',
            'kecamatan' => 'required',
            'jumlah_anggota' => 'required|integer',
            'pekerjaan' => 'required',
            'penghasilan' => 'required|numeric',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $foto = null;

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')
                            ->store('families', 'public');
        }

        Family::create([
            'nama_kk' => $request->nama_kk,
            'nik' => $request->nik,
            'alamat' => $request->alamat,
            'kecamatan' => $request->kecamatan,
            'jumlah_anggota' => $request->jumlah_anggota,
            'pekerjaan' => $request->pekerjaan,
            'penghasilan' => $request->penghasilan,
            'foto' => $foto,
        ]);

        return redirect()->route('families.index')
            ->with('success', 'Data berhasil ditambahkan');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $family = Family::findOrFail($id);

        return view('families.edit', compact('family'));
    }

    public function update(Request $request, string $id)
    {
        $family = Family::findOrFail($id);

        $request->validate([
            'nama_kk' => 'required',
            'nik' => 'required|unique:families,nik,' . $id,
            'alamat' => 'required',
            'kecamatan' => 'required',
            'jumlah_anggota' => 'required|integer',
            'pekerjaan' => 'required',
            'penghasilan' => 'required|numeric',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $data = [
            'nama_kk' => $request->nama_kk,
            'nik' => $request->nik,
            'alamat' => $request->alamat,
            'kecamatan' => $request->kecamatan,
            'jumlah_anggota' => $request->jumlah_anggota,
            'pekerjaan' => $request->pekerjaan,
            'penghasilan' => $request->penghasilan,
        ];

        if ($request->hasFile('foto')) {

            if ($family->foto) {
                Storage::disk('public')->delete($family->foto);
            }

            $data['foto'] = $request->file('foto')
                                    ->store('families', 'public');
        }

        $family->update($data);

        return redirect()->route('families.index')
            ->with('success', 'Data berhasil diperbarui');
    }

    public function destroy(string $id)
    {
        $family = Family::findOrFail($id);

        $family->delete();

        return redirect()->route('families.index')
            ->with('success', 'Data berhasil dihapus');
    }
}