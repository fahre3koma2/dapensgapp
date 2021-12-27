<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisPensiun extends Model
{
    protected $table = "jenispensiun";

    protected $fillable = [
        'id', 'jenis', 'nama', 'keterangan',
    ];
}
