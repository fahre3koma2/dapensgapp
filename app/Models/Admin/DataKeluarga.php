<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Unit;

class DataKeluarga extends Model
{
    use HasFactory;
    protected $table = 'data_keluarga';
    protected $fillable = [
        'id', 'nopeserta', 'urut', 'nama', 'sex', 'hubungan', 'tgl_lahir', 'temp_lahir', 'tgl_wafat', 'st_cerai', 'st_wafat', 'st_kerja', 'st_nikah', 'keterangan', 'status', 'jenis', 'created_at', 'updated_at',

    ];
}
