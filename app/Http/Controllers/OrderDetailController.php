<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\OrderDetailService;

class OrderDetailController extends Controller
{
    public function __construct(readonly OrderDetailService $orderDetailService)
    {
  
    }
    public function index()
    {
        $orders = $this->orderDetailService->getOrder();
        // dd($orders);
        return view('admin.order.index',['orders'=>$orders]);
    }

    public function show($id)
    {
        // $orderDetail = $this->orderDetailService->getOrderDetail();
        $orderDetails = $this->orderDetailService->getOrderDetailById($id);

        // dd($orderDetails);
        return view('admin.order.list-order',[ 'orderDetail' => $orderDetails]);
    }
}
