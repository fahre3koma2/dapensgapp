<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekeningPensiun extends Model
{
    protected $table = "rekening_pensiun";

    protected $fillable = [

        'id', 'nopeserta', 'upensiun', 'rapel', 'pph', 'statuspajak', 'pajak', 'nama_penerima', 'bank', 'norekening', 'alamat_rek', 'atasnama', 'cabang', 'jenis', 'status', 'created_at', 'updated_at',

    ];
}
