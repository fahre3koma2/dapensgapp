<?php

namespace App\Models;

use App\Models\Admin\DataKeluarga;
use App\Models\Admin\RekeningPensiun;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Unit;
use App\Models\Admin\Lampiran;

class BiodataUpdate extends Model
{
    use HasFactory;
    protected $table = 'biodata_update';
    protected $fillable = [
        'user_id', 'name', 'nohp', 'jabatan', 'unit', 'alamat', 'kelurahan', 'rt', 'rw', 'kota', 'kodepos', 'status', 'nopegawai', 'file', 'nopeserta', 'berhak', 'jenis', 'sex', 'tempat_lahir', 'tgl_lahir', 'nik', 'nik_berhak', 'npwp', 'email_user', 'baru', 'verifikasi', 'tampil', 'kawin', 'nopd', 'urut', 'data_kel',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function units()
    {
        return $this->hasOne(Unit::class, 'id', 'unit');
    }

    public function keluarga()
    {
        return $this->hasMany(DataKeluarga::class, 'nopeserta', 'nopeserta');
    }

    public function rekening()
    {
        return $this->hasOne(RekeningPensiun::class, 'nopeserta', 'nopeserta');
    }

    public function lampiran()
    {
        return $this->belongsTo(Lampiran::class, 'nopeserta', 'nopeserta');
    }
}
