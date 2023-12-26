<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\OrderDetail;
use App\Models\Order;


class InvoiceController extends Controller
{
    public function generateInvoice(Request $request, string $id): \Illuminate\Http\Response
    {
        $data = OrderDetail::where('order_id',$id)->get();
        // Chuyển collection thành mảng
        $orderDetail = $data->toArray();
        // dd($orderDetail);
        $pdf = Pdf::loadView('admin.pdf.order', $orderDetail);
        //Nếu muốn hiển thị file pdf theo chiều ngang
        // $pdf->setPaper('A4', 'landscape');

        //Nếu muốn download file pdf
        // return $pdf->download('myPDF.pdf');

        //Nếu muốn preview in pdf
        return $pdf->stream('myPDF.pdf');
    }
}
