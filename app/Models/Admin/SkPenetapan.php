<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkPenetapan extends Model
{
    protected $table = "skpenetapan";

    protected $fillable = [
        'id', 'noskpenetapan', 'nopeserta', 'name', 'alamat', 'nohp', 'email', 'keterangan', 'status', 'file', 'created_at', 'updated_at',

    ];
}
