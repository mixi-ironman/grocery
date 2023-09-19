<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\OrderService;

class OrderController extends Controller
{
    public function __construct(readonly OrderService $orderService)
    {
  
    }
    public function index()
    {
        // $orders = $this->orderService->getOrder();
        // // dd($orders);

        // return view('admin.order.index',['orders'=>$orders]);
    }

    public function updateStatus(Request $request, String $id)
    {
        return $status = $this->orderService->updateStatus($request, $id);
    }
}
