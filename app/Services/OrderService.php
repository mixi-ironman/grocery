<?php

namespace App\Services;

use Illuminate\Support\Str;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Services\ProductService;

use App\Repositories\OrderRepository;

class OrderService
{
     private $orderRepository;
     private $productService;

    public function __construct(OrderRepository $orderRepository,ProductService $productService)
    {
        $this->orderRepository = $orderRepository;
        $this->productService = $productService;

    }

    public function add($request, $carts)
    {
        $totalAmount = number_format($request->total_amount, 2, '.', '');
        $order = [
            'name' => $request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'shipping_address'=>$request->shipping_address,
            'payment_method'=>$request->payment_method,
            'order_note'=>$request->order_note,
            'total_amount' =>$totalAmount,
        ];

        // Lưu thông tin khách hàng vào bảng order
        $addOrder = Order::create($order);
        foreach ($carts as $id => $cart){
           $orderDetail = [
               'order_id'=>$addOrder->id,
               'product_id'=>$id,
               'product_name'=>$cart['name'],
               'price'=>$cart['price'],
               'quantity'=>$cart['quantity'],
               'total_price'=> $cart['quantity']*$cart['price'],
               'image'=>$cart['image'],
           ];
            if($order!=false){
                OrderDetail::create($orderDetail);
            }
          
        }

        return response()->json(
            [
                'status' => 'success',
                'code' => 200,
                'cart' => $cart,
            ]
        ,200);
    }

    public function subTotal($carts){
        $subTotal = 0;
        foreach ($carts as $cart){
            $orderDetail = [
                'quantity'=>$cart['quantity'],
                'productPrice'=>$cart['productPrice'],
                'total'=> $cart['quantity']*$cart['productPrice'],
            ];
            $total = $orderDetail['total'];
            $subTotal += $total;
        }
        return $subTotal;
    }

}
