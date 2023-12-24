<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\OrderExcel;
use Barryvdh\DomPDF\Facade\Pdf;

class OrderExportExcellController extends Controller
{
    public function exportStatistics()
    {
        return Excel::download(new OrderExcel, 'statistics.xlsx');
        // return Excel::download(new OrderExcel, 'filename.xlsx')->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

    }

    /**
     * Generate PDF
     *
     * @return Response
     */
    public function toPDF(): \Illuminate\Http\Response
    {
        $data = ['title' => 'Welcome to Viet Nam'];
        $pdf = Pdf::loadView('pdf/test', $data);
        //Nếu muốn hiển thị file pdf theo chiều ngang
        // $pdf->setPaper('A4', 'landscape');

        //Nếu muốn download file pdf
        return $pdf->download('myPDF.pdf');

        //Nếu muốn preview in pdf
        //return $pdf->stream('myPDF.pdf');
    }
}
