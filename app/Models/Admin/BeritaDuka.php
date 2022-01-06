<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaDuka extends Model
{
    protected $table = "laporan_duka";

    protected $fillable = [
        'id', 'nolaporan', 'nama_pelapor', 'notelp', 'nama_peserta', 'tgl_meninggal', 'nopensiun', 'hub_keluarga', 'alamat', 'keterangan', 'status', 'jenis', 'created_at', 'updated_at',
    ];
}
