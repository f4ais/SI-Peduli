<?php

namespace App\Http\Controllers;

use App\Models\Verifikasi;
use Illuminate\Http\Request;

class VerifikasiController extends Controller
{
    public function index()
    {
        $data = Verifikasi::all();

        return view('verifikasi.index', compact('data'));
    }

    public function show($id)
    {
        $data = Verifikasi::findOrFail($id);

        return view('verifikasi.detail', compact('data'));
    }

    public function approve(Request $request, $id)
    {
        $data = Verifikasi::findOrFail($id);

        $data->status = 'disetujui';
        $data->catatan_admin = $request->catatan_admin;
        $data->save();

        return redirect()->route('verifikasi.index')
            ->with('success', 'Data berhasil disetujui');
    }

    public function reject(Request $request, $id)
    {
        $data = Verifikasi::findOrFail($id);

        $data->status = 'ditolak';
        $data->catatan_admin = $request->catatan_admin;
        $data->save();

        return redirect()->route('verifikasi.index')
            ->with('success', 'Data berhasil ditolak');
    }
}