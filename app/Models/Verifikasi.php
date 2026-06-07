<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Verifikasi extends Model
{
    protected $fillable = [
        'nama_kepala_keluarga',
        'nik',
        'alamat',
        'status',
        'catatan_admin',
    ];
}