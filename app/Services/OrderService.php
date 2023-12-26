<?php

namespace App\Services;

use Illuminate\Support\Str;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderSuccessMail;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderDetail;
use App\Services\ProductService;
use App\Services\OrderDetailService;
use App\Repositories\OrderRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Jobs\SendEmailJob;
class OrderService
{


    public function __construct(readonly OrderRepository $orderRepository,readonly ProductService $productService,readonly OrderDetailService $orderDetailService)
    {
    }

    // //Đặt hàng
    public function add(Request $request, $carts)
    {
        
        DB::beginTransaction();

        try {
            $customMessages = [
                'name.required' => 'Vui lòng nhập thông tin !',
                // 'name.min' => 'Vui lòng nhập tối thiểu 5 ký tự !',
                // 'name.max' => 'Vui lòng nhập tối đa 12 ký tự !',
                'email.required' => 'Vui lòng nhập thông tin !',
                'phone.required' => 'Vui lòng nhập thông tin !',
                'area_ship.required' => 'Vui lòng nhập thông tin !',
                'shipping_address.required' => 'Vui lòng nhập thông tin !',
                
            ];
            
            // Validate dữ liệu với các thông báo tùy chỉnh
            $validator = Validator::make($request->all(), [
                'name' => 'required', // kiểm tra độ dài, chỉ chấp nhận chữ cái, số, và dấu gạch dưới
                'email' => 'required',
                'phone' => 'required',
                'area_ship' => 'required',
                'shipping_address' => 'required',
            ], $customMessages);
    
            // Kiểm tra nếu có lỗi
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
    
            // Tạo mã đơn hàng ngẫu nhiên (UUID)
            $orderCode = $this->generateOrderCode();
            $totalAmount = 0;
            
            $user = Auth::user();

            if (Auth::check()) {
                $user_id = $user->id;
            }else{
                $user_id = null;
            }

            $order = [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'shipping_address' => $request->shipping_address,
                'area_ship' => $request->area_ship,
                'payment_method' => $request->payment_method,
                'order_note' => $request->order_note,
                'order_code' => $orderCode,
                'total_amount' => $totalAmount,
                'user_id' => $user_id,
            ];

            foreach ($carts as $id => $cart) {        
                $product = Product::find($id);  
                // if ($cart['quantity'] > 10) {
                //     return back()->with('fail','Một sản phẩm bạn chỉ mua tối đa được 10 sản phẩm');
                //     // return response()->json([
                //     //     'status' => 'error',
                //     //     'code' => 400,
                //     //     'product_id' => $id,
                //     //     'msg' => 'Một sản phẩm bạn chỉ mua tối đa 10 sản phẩm ^.^',
                //     // ]);
                // }

                if (!$product || $cart['quantity'] > $product->stock) {
                    // Số lượng sản phẩm trong kho không đủ hoặc sản phẩm không tồn tại

                    // //khi sản phẩm ko đủ số lượng có thể xóa sản phẩm đó trong giỏ hàng hoặc quay về trang show cart
                    // unset($carts[$id]);
                    // session()->put('cart', $carts);
                    DB::rollback();

                    if (!$product) {
                        return back()->with('fail','Sản phẩm không tồn tại');
                        // return response()->json([
                        //     'status' => 'error',
                        //     'code' => 400,
                        //     'msg' => 'Sản phẩm không tồn tại: ' . $cart['name'],
                        // ]);
                    } else {
                        $quantityShortage = $cart['quantity'] - $product->stock;
                        return back()->with('fail','Số lượng sản phẩm trong kho không đủ');
                        
                        // return response()->json([
                        //     'status' => 'error',
                        //     'code' => 400,
                        //     'product_id'=>$id,
                        //     // 'msg' => 'Số lượng sản phẩm "' . $product->name . '" trong kho không đủ. Thiếu ' . $quantityShortage . ' sản phẩm.',
                        //     'msg' => 'Số lượng sản phẩm "' . $product->name . '" trong kho không đủ ^.^',
                        // ]);
                    }
                }
            }
            // Lưu thông tin khách hàng vào bảng order
            $addOrder = Order::create($order);
            // dd($addOrder);

            $orderId = $addOrder->id;

            foreach ($carts as $id => $cart) {
                $product = Product::find($id);  
                
                $orderDetail = [
                    'order_id' => $orderId,
                    'product_id' => $id,
                    'product_name' => $cart['name'],
                    'price' => $cart['price'],
                    'quantity' => $cart['quantity'],
                    'total_price' => $cart['quantity'] * $cart['price'],
                    'image' => $cart['image'],
                ];

                // Thêm thông tin sản phẩm vào bảng orderDetail
                OrderDetail::create($orderDetail);

                // Cập nhật số lượng sản phẩm trong bảng products
                // $product->decrement('stock', $cart['quantity']);
                
                if($request->total_amount)
                {
                    $totalAmount = $request->total_amount;
                }else{
                    // Cập nhật tổng tiền đơn hàng
                    $totalAmount += $cart['quantity'] * $cart['price'];
                }
            }  

            // Cập nhật tổng tiền đơn hàng vào bảng order
            $addOrder->total_amount = $totalAmount;
            $addOrder->save();

            // Nếu không có lỗi, lưu các thay đổi vào cơ sở dữ liệu
            DB::commit();

            //Gửi mail
            $order = Order::find($orderId);
            

            if($request->payment_method == 'online')
            {
                return redirect()->route('vnpay', ['order_id' => $orderId, 'amount' => $totalAmount]);
            }else{
                //gửi mail
                // Mail::to($order->email)
                //     ->send(new OrderSuccessMail($order));
                //cách hay hơn sử dụng queue job
                dispatch(new SendEmailJob($order));
            }
            session()->forget('cart');
            return redirect()->route('thanh-you');
            

            // return response()->json([
            //     'status' => 'success',
            //     'msg' => 'Tạo đơn hàng thành công',
            // ], 200);
            
        } catch (\Exception $e) {
            // Nếu có lỗi xảy ra, hủy bỏ các thay đổi và không lưu vào cơ sở dữ liệu
            DB::rollback();
            return response()->json([
                'status' => 'error',
                'msg' => 'Có lỗi xảy ra. Vui lòng thử lại sau',
            ], 500);
        }
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

    // Tạo mã đơn hàng ngẫu nhiên với định dạng "#12ghjkju33"
    function generateOrderCode()
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $length = 10;
        $randomString = '#';
        for ($i = 0; $i < $length; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }
        return $randomString;
    }

    function updateStatus($request,$orderId)
    {
        
        $newStatus = $request->status;
        try {
            if($newStatus == "Đã giao"){
                $orderDetails = $this->orderDetailService->getOrderDetailById($orderId);
                foreach($orderDetails as $item)
                {
                    $product = Product::find($item->product->id);
                    $product->product_sold += $item->quantity;
                    $product->decrement('stock', $item->quantity);
                    $product->save();
                }
            }

            $order = Order::find($orderId);
            $order->status = $newStatus;
            $order->save();
            return response()->json([
                'code' => 200,
                'success' => 'Cập nhật trạng thái thành công',
                'status' => $newStatus
            ], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Có lỗi xảy ra: ' . $e->getMessage()], 500);
        }
    }

}
