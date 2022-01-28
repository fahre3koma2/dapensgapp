<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LampiranDudaJanda extends Model
{
    protected $table = "lampiran_dudajanda";

    protected $fillable = [
        'id', 'nopeserta', 'nopermohonan', 'file_ktp', 'file_kk', 'file_npwp', 'file_foto', 'file_tabungan', 'file_skperusahaan', 'file_surat_kematian', 'file_surat_sekolah', 'file_surat_penghasilan', 'file_scan_karyawan', 'file_scan_anak', 'file_surat_kuasa', 'created_at', 'updated_at',
    ];
}
