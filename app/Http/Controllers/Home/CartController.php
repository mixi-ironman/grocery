<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Client\ProductService;
use App\Services\OrderService;
use App\Models\Category;
use App\Models\Address;
use App\Models\User;
use App\Models\Coupon;
use App\Models\UserCoupon;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{



    public function __construct(readonly private ProductService $productService,readonly private OrderService $orderService)
    {

    }
    public function index()
    {
       
        return view('client.layouts.pages.view-cart-detail'); 
    }

    public function addToCart(Request $request, $id)
    {
        // để update số lượng trên icon cart
        $quantity_input = $request->quantity ? $request->quantity : 1;
        $product = $this->productService->getProductById($id);
    
        if (!$product) {
            return redirect()->back()->with('error', 'Sản phẩm không tồn tại.');
        }
    
        $cart = session()->get('cart', []);
    
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += $quantity_input; // Tăng số lượng sản phẩm trong giỏ hàng
        } else {
            $cart[$id] = [
                'name' => $product->name,
                'image' => $product->image,
                'price' => $product->price,
                'quantity' => $quantity_input,
            ];
        }
    
        session()->put('cart', $cart);
        $count_number = count($cart);
        $cartList = view('client.components.cart_list', ['carts' => $cart])->render();
    
        return response()->json(
            [
                'message' => 'success',
                'code' => 200,
                'cart' => $cart,
                'cartList' => $cartList,
                'count_number' => $count_number
            ],
            200
        );
    }
    

     public function showCart(Request $request)
     {
        // echo"<pre>";
        // print_r(session()->get('cart'));
        // echo"</pre>";
        $categoryList = Category::where('parent_id', 0)->get();
        $carts = session()->get('cart',[]);
        return view('client.layouts.pages.view-cart-detail',['carts' => $carts,'categoryList'=>$categoryList]);
     }

     public function updateCart(Request $request)
     {
        if($request->id && $request->quantity)
        {
            $carts = session()->get('cart',[]);
            $carts[$request->id]['quantity'] = $request->quantity;
            session()->put('cart', $carts);
            $cartComponent = view('client.components.cart_component',['carts' => $carts])->render();
            $cartList = view('client.components.cart_list', ['carts' => $carts])->render();
            return response()->json([
                'code'=>200,
                'msg'=>'Cập nhật số lượng thành công!',
                'cart_component' => $cartComponent,
                'cartList' => $cartList
            ]);

        }
       
     }

     public function deleteCart(Request $request)
     {
       if($request->id)
        {
            $carts = session()->get('cart',[]);
            unset($carts[$request->id]);
            session()->put('cart', $carts);
            $count_number = count($carts);
            
            $cartComponent = view('client.components.cart_component',['carts' => $carts])->render();
            $cartList = view('client.components.cart_list', ['carts' => $carts])->render();

            return response()->json([
                'code'=>200,
                'msg'=>'Xóa sản phẩm thành công!',
                'cart_component' => $cartComponent,
                'count_number'=>$count_number,
                'cartList' => $cartList
            ]);

        }
     }

      public function checkOut(Request $request)
      {
            $total_discount = request()->query('total');
            $carts = session()->get('cart',[]);
            if(Auth::check())
            {
                $user = Auth::user();
                $address = Address::where('is_default', 1)->where('user_id', $user->id)->first();
            }else{
                $address = [];
            }
            // dd($address);
            $categoryList = Category::where('parent_id', 0)->get();
            return view('client.layouts.pages.checkout',['address' => $address,'carts' => $carts,'categoryList'=>$categoryList,'total_discount' => $total_discount]);
      }

      //thanh toán khi nhận hàng
      public function addOrderCash(Request $request)
      {
        $carts = session()->get('cart',[]);
        if (isset($carts))
        {
            // session()->forget('cart');
            return $this->orderService->add($request,$carts);
        }
      }

      public function clearCart(Request $request)
      {
            session()->forget('cart');
            return response()->json([
                'status' => 'success',
                'code' => 200,
            ]);
      }

    public function applyCoupon(Request $request)
    {
        if(Auth::check())
        {
            $user = Auth::user();
            $user = User::find($user->id); 
            $coupon = Coupon::where('name' , $request->coupon_code)->first(); 
            $userCoupons = $user->userCoupons;
            $isCouponValid = $userCoupons->contains('name', $request->coupon_code);
            $total = $this->getTotal();

            if(!$isCouponValid)
            {
                if($coupon)
                {
                    // Lấy ngày hết hạn từ cơ sở dữ liệu hoặc bất kỳ nguồn dữ liệu nào khác
                    $expirationDate = Carbon::parse($coupon->expery_date); // Giả sử $coupon->expiration_date là ngày hết hạn của mã giảm giá
                    // Lấy thời gian hiện tại
                    $currentDate = Carbon::now();
                    // So sánh ngày hết hạn với thời gian hiện tại
                    if ($expirationDate->greaterThan($currentDate)) {
                        $percentAmount = 0;
                        $coupons = UserCoupon::create([
                            'user_id' => $user->id,
                            'coupon_id' => $coupon->id,
                            'value' => $coupon->value
                        ]);

                        if($coupon->type == 'money')
                        {
                            $discount =$total - $coupon->value; 
                            $percentAmount = $coupon->value;
                        }else if($coupon->type == 'percent'){
                            $discount =$total - ($total * $coupon->value / 100);
                            $percentAmount = $total * $coupon->value / 100 ;
                        }

                        return response()->json([
                            'code'=>200,
                            'msg'=>'Áp mã thành công!',
                            'coupons' => $coupons,
                            'total' => $total,
                            'discount' => $discount,
                            'percentAmount' => $percentAmount
                        ]);
                    } else {
                        return response()->json([
                            'status' => 'outofdate',
                            'msg'=>'Coupon đã hết hạn!',
                        ]);
                    }
                    
                }else{
                    return response()->json([
                        'code'=>500,
                        'msg'=>'Coupon không tồn tại!',
                    ]);
                }
            }else{
                return response()->json([
                    'code'=>500,
                    'msg'=>'Coupon đã dùng hoặc không tồn tại!',
                ]);
            }

        }

        // $name = $request->input('coupon_code');
        // $coupon = $this->discountServices->firstWithExperyDate($name,auth()->user()->id);

        // if($coupon)
        // {
        //     $message = 'Áp mã giảm giá thành công!';
        // }else{
        //     $message = 'Mã giảm giá không tồn tại hoặc hết hạn!';
        // }

    }

    public function getTotal()
    {
        $cart = session()->get('cart', []);
        $total = 0;

        foreach ($cart as $item) {
            $total += $item['quantity'] * $item['price'];
        }

        return $total;
    }

}  
