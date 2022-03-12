<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilInfo extends Model
{
    protected $table = "profil_info";

    protected $fillable = [
        'id', 'judul', 'keterangan', 'jenis', 'created_at', 'updated_at',

    ];
}

