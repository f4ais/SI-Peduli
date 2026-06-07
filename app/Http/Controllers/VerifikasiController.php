<?php

namespace App\Http\Controllers;

use App\Models\Verifikasi;

class VerifikasiController extends Controller
{
    public function index()
    {
        $data = Verifikasi::all();

        return view('verifikasi.index', compact('data'));
    }
}