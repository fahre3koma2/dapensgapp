<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panduan extends Model
{
    protected $table = "panduan";

    protected $fillable = [
        'id', 'judul', 'file', 'keterangan', 'status', 'jenis', 'created_at', 'updated_at',
    ];
}
