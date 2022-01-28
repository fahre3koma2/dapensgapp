<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LampiranRek extends Model
{
    protected $table = "lampiran_pindahrek";

    protected $fillable = [
        'id', 'nopeserta', 'nopermohonan', 'file_ktp', 'file_kk', 'file_npwp', 'file_foto', 'file_tabungan', 'file_skperusahaan', 'file_surat_kematian', 'file_surat_sekolah', 'file_surat_penghasilan', 'file_surat_nikahortu', 'file_scan_anak', 'file_surat_kuasa', 'file_belum_nikah', 'created_at', 'updated_at',
    ];
}
