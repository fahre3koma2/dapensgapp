<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = "galeri";

    protected $fillable = [
        'id', 'judul', 'file', 'aktif', 'keterangan', 'kategori', 'created_at', 'updated_at',
    ];
}


