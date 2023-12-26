<?php

namespace App\Exports;

use App\Models\Orderdetail;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;

class OrderExcel implements FromCollection
{
    use Exportable;

    /**
    * @return \Illuminate\Support\Collection
    * @return Collection
    */
    public function collection()
    {
        return Orderdetail::all();
    }
}