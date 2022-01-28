<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Biodata;
use App\Models\Admin\LampiranAnak;

class PermohonanAnak extends Model
{
    protected $table = "perm_anak";

    protected $fillable = [
        'id', 'idperm_karyawan', 'nopeserta', 'name', 'alamat', 'nohp', 'anak1', 'alamat1', 'anak2', 'alamat2', 'anak3', 'alamat3', 'norekening', 'bank', 'cabang', 'status', 'created_at', 'updated_at',
    ];

    public function biodata()
    {
        return $this->belongsTo(Biodata::class, 'nopeserta', 'nopeserta');
    }

    public function lampiran()
    {
        return $this->hasOne(LampiranAnak::class, 'nopermohonan', 'idperm_karyawan');
    }

}


