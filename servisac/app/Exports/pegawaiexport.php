<?php

namespace App\Exports;

use App\pegawaimodel;
use Maatwebsite\Excel\Concerns\FromCollection;

class pegawaiexport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return pegawaimodel::all();
    }
}
