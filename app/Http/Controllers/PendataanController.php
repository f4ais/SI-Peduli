<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendataanController extends Controller
{
    public function index()
    {
        return view('pendataan.index');
    }

    public function store(Request $request)
    {
        DB::table('pendataan')->insert([
    'kecamatan' => $request->kecamatan,
    'status' => 'Pending'
]);

        return redirect('/pendataan')
            ->with('success', 'Data berhasil disimpan');
    }
}