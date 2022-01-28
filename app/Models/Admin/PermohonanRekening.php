<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Biodata;
use App\Models\Admin\LampiranRek;

class PermohonanRekening extends Model
{
    protected $table = "perm_pindahrek";

    protected $fillable = [
        'id', 'idperm_karyawan', 'nopeserta', 'nopermohonan', 'name', 'alamat', 'nohp', 'norekening', 'bank', 'cabang', 'status', 'norekening2', 'bank2', 'cabang2', 'created_at', 'updated_at',
    ];

    public function biodata()
    {
        return $this->belongsTo(Biodata::class, 'nopeserta', 'nopeserta');
    }

    public function lampiran()
    {
        return $this->hasOne(LampiranRek::class, 'nopermohonan', 'idperm_karyawan');
    }

}


