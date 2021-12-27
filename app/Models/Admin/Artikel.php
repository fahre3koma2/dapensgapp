<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = "artikel";

    protected $fillable = [
        'id', 'judul', 'keterangan', 'gambar', 'jenis', 'kategori', 'status', 'bagian', 'views', 'created_at', 'updated_at', 'created_by', 'updated_by',
    ];
}
