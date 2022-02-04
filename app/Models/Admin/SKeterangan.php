<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SKeterangan extends Model
{
    protected $table = "sketerangan";

    protected $fillable = [
        'id', 'nosketerangan', 'nopeserta', 'name', 'alamat', 'nohp', 'email', 'keterangan', 'jenis', 'status', 'file', 'created_at', 'updated_at',

    ];
}
