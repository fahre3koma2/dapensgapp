<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    protected $table = "pengkinian_periode";

    protected $fillable = [
        'id', 'periode1', 'tgl_awal1', 'tgl_akhir1', 'tahun1', 'periode2', 'tgl_awal2', 'tgl_akhir2', 'tahun2', 'keterangan', 'tahun', 'created_at', 'updated_at',
    ];

}
