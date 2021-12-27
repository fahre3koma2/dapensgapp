<?php

namespace App\Imports;

use App\Models\Biodata;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BiodataImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function transformDate($value, $format = 'Y-m-d')
    {
        try {
            return \Carbon\Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value));
        } catch (\ErrorException $e) {
            return \Carbon\Carbon::createFromFormat($format, $value);
        }
    }

    public function model(array $row)
    {
        return new Biodata([
            //
            'user_id'       => $row[0],
            'name'          => $row[1],
            'nohp'          => $row[2],
            'alamat'        => $row[3],
            'kota'          => $row[4],
            'kodepos'       => $row[5],
            'nopeserta'     => $row[6],
            'berhak'        => $row[7],
            'jenis'         => $row[8],
            'sex'           => $row[9],
            'tgl_lahir'     => $this->transformDate($row[10]),
            'nik'           => $row[11],
            'nik_berhak'    => $row[12],
            'npwp'          => $row[13]
        ]);
    }
}
