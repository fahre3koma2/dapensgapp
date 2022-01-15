<?php

namespace App\Imports;

use App\Models\Admin\RekeningPensiun;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RekeningImport implements ToModel
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
        return new RekeningPensiun([
            //
            'nopeserta'     => $row[0],
            'upensiun'      => $row[1],
            'pph'           => $row[2],
            'cabang'        => $row[3],
            'alamat'        => $row[3],
            'bank'          => $row[7],
            'norekening'    => $row[5],
            'atasnama'      => $row[6],
            'nama_penerima' => $row[8]
        ]);
    }
}
