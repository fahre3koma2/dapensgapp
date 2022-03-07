<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KontakKami extends Model
{
    protected $table = "kontakkami";

    protected $fillable = [
        'id', 'nolaporan', 'nama', 'nopeserta', 'nohp', 'katergori', 'pesan', 'status', 'created_at', 'updated_at',
    ];
}
