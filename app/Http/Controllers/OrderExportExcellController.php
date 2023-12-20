<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\OrderExcel;

class OrderExportExcellController extends Controller
{
    public function exportStatistics()
    {
        return Excel::download(new OrderExcel, 'statistics.xlsx');
        // return Excel::download(new OrderExcel, 'filename.xlsx')->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

    }
}
