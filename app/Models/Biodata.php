<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Unit;

class Biodata extends Model
{
    use HasFactory;
    protected $table = 'biodata';
    protected $fillable = [
        'user_id', 'name', 'nohp', 'jabatan', 'unit', 'alamat', 'kota', 'kodepos', 'status', 'nopegawai', 'file', 'nopeserta', 'berhak', 'jenis', 'sex', 'tempat_lahir', 'tgl_lahir', 'nik', 'nik_berhak', 'npwp', 'email_user'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function units()
    {
        return $this->hasOne(Unit::class, 'id', 'unit');
    }
}
