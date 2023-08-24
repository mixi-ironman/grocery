<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Client\ProductService;
use App\Services\OrderService;
use App\Models\Category;


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
            return response()->json([
                'code'=>200,
                'msg'=>'Cập nhật số lượng thành công!',
                'cart_component' => $cartComponent,
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
            return response()->json([
                'code'=>200,
                'msg'=>'Xóa sản phẩm thành công!',
                'cart_component' => $cartComponent,
                'count_number'=>$count_number

            ]);

        }
     }

      public function checkOut(Request $request)
      {
            $carts = session()->get('cart',[]);
            $categoryList = Category::where('parent_id', 0)->get();
            return view('client.layouts.pages.checkout',['carts' => $carts,'categoryList'=>$categoryList]);
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
                'status' => 'success_',
                'code' => 200,
            ]);
      }


}
