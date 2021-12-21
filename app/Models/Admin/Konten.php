<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konten extends Model
{
    protected $table = "konten";

    protected $fillable = [
        'id', 'konten', 'keterangan', 'keterangan2', 'keterangan3', 'file', 'status', 'created_at', 'updated_at', 'create_by', 'update_by',
    ];

}
