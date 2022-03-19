<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lampiran extends Model
{
    protected $table = "lampiran";

    protected $fillable = [
        'id', 'nopeserta', 'file_ktp', 'file_kk', 'file_npwp', 'file_foto', 'file_tabungan', 'file_skperusahaan', 'file_surat_kematian', 'file_surat_sekolah', 'file_surat_penghasilan', 'file_scan_karyawan', 'file_scan_anak', 'file_surat_kuasa',  'file_surat_nikah', 'file_lain1', 'file_lain2', 'file_lain3', 'created_at', 'updated_at',
    ];
}
