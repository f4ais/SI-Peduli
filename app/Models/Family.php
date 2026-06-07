<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    protected $fillable = [
        'nama_kk',
        'nik',
        'alamat',
        'kecamatan',
        'jumlah_anggota',
        'pekerjaan',
        'penghasilan',
        'foto',
        'tanggungan',
        'status',
        'catatan_admin'
    ];
}