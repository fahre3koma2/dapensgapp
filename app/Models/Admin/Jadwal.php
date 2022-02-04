<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = "seting_jadwal";

    protected $fillable = [
        'id', 'nama', 'tgl_awal', 'tgl_akhir', 'keterangan', 'created_at', 'updated_at',
    ];

}
