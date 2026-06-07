<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalPendataan = DB::table('pendataan')->count();

        $pending = DB::table('pendataan')
            ->where('status', 'Pending')
            ->count();

        $disetujui = DB::table('pendataan')
            ->where('status', 'Disetujui')
            ->count();

        $ditolak = DB::table('pendataan')
            ->where('status', 'Ditolak')
            ->count();

        return view('admin.dashboard', compact(
            'totalPendataan',
            'pending',
            'disetujui',
            'ditolak'
        ));
    }
}