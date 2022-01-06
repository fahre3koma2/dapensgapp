<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SetingSosmed extends Model
{
    protected $table = "seting_sosmed";

    protected $fillable = [
        'id', 'alamat', 'notelp', 'nohp', 'email', 'wa', 'instagram', 'facebook', 'linkedin', 'created_at', 'updated_at',
    ];
}
