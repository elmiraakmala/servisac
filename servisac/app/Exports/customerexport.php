<?php

namespace App\Exports;

use App\customermodel;
use Maatwebsite\Excel\Concerns\FromCollection;

class customerexport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return customermodel::all();
    }
}
