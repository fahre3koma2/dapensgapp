<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Biodata;
use App\Models\Admin\Lampiran;

class PermohonanPindahRek extends Model
{
    protected $table = "perm_pindahrek";

    protected $fillable = [
        'id', 'idperm_karyawan', 'nopeserta', 'name', 'alamat', 'kelurahan', 'rt', 'rw', 'kota', 'kodepos', 'nohp', 'norekening', 'bank', 'cabang', 'status', 'created_at', 'updated_at',
    ];

    public function biodata()
    {
        return $this->belongsTo(Biodata::class, 'nopeserta', 'nopeserta');
    }

    public function lampiran()
    {
        return $this->belongsTo(Lampiran::class, 'nopeserta', 'nopeserta');
    }

}


