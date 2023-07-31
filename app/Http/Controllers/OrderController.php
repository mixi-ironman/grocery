<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\OrderService;

class OrderDetailController extends Controller
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
}
