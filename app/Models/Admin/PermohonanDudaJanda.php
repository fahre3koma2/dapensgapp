<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Biodata;
use App\Models\Admin\LampiranDudaJanda;

class PermohonanDudaJanda extends Model
{
    protected $table = "perm_dudajanda";

    protected $fillable = [
        'id', 'idperm_karyawan', 'nopeserta', 'name', 'name_pensiun', 'alamat', 'kelurahan', 'rt', 'rw', 'kota', 'kodepos', 'nohp', 'norekening', 'bank', 'cabang', 'status', 'created_at', 'updated_at',
    ];

    public function biodata()
    {
        return $this->belongsTo(Biodata::class, 'nopeserta', 'nopeserta');
    }

    public function lampiran()
    {
        return $this->hasOne(LampiranDudaJanda::class, 'nopermohonan', 'idperm_karyawan');
    }

}


