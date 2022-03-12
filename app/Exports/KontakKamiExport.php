<?php

namespace App\Exports;

use App\Models\Admin\KontakKami;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class KontakKamiExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return KontakKami::query()
        ->select('nolaporan', 'nopeserta', 'nama', 'nohp', 'pesan')
        ->get();
    }

    public function headings(): array
    {
        return ["No Laporan", "No Pensiun", "Nama", "No HP", "Pesan"];
    }
}



