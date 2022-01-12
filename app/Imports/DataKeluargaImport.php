<?php

namespace App\Imports;

use App\Models\Admin\DataKeluarga;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DataKeluargaImport implements ToModel
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
        return new DataKeluarga([
            //
            'nopeserta'     => $row[0],
            'urut'          => $row[1],
            'nama'          => $row[2],
            'sex'           => $row[3],
            'hubungan'      => $row[4],
            'tgl_lahir'     => $this->transformDate($row[5]),
            'st_cerai'      => $row[6],
            'st_wafat'      => $row[7],
            'st_kerja'      => $row[8],
            'st_nikah'      => $row[9]
        ]);
    }
}
