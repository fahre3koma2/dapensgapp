<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = "kategori";

    protected $fillable = [
        'id', 'kode', 'nama', 'keterangan', 'created_at', 'updated_at',
    ];

}
