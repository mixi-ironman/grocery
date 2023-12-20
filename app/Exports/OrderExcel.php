<?php

namespace App\Exports;

use App\Models\Orderdetail;
use Maatwebsite\Excel\Concerns\FromCollection;

class OrderExcel implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Orderdetail::all();
    }
}
