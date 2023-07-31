<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Client\ProductService;
use App\Services\OrderService;


class CartController extends Controller
{
    private $productService;
    private $orderService;


    public function __construct(ProductService $productService,OrderService $orderService)
    {
        $this->productService = $productService;
        $this->orderService = $orderService;
    }
    public function index()
    {
       
        return view('client.layouts.pages.view-cart-detail'); 
    }

    public function addToCart(Request $request, $id)
    {
        //  session()->forget('cart');
        //  Hoặc sử dụng session()->pull('cart') nếu bạn muốn lấy giỏ hàng và xóa nó khỏi session cùng lúc.
        // dd(session()->get('cart'));

        $product = $this->productService->getProductById($id);
        // dd($product);
        if (!$product) {
            return redirect()->back()->with('error', 'Sản phẩm không tồn tại.');
        }
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += 1; // Tăng số lượng sản phẩm trong giỏ hàng
            // $cart[$id]['quantity'] = $cart[$id]['quantity'] + 1;
        } else {
            $cart[$id] = [
                'name' => $product->name,
                'image' => $product->image,
                'price' => $product->price,
                'quantity' => 1,
            ];
        }

        session()->put('cart', $cart);
        $cartList =  view('client.components.cart_list',['carts' => $cart])->render();
        return response()->json(
            [
                'message' => 'succes',
                'code' => 200,
                'cart' => $cart,
                'cartList'=>$cartList
            ]
        ,200);
        
        // return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào giỏ hàng.');
    }

     public function showCart(Request $request)
     {
        // echo"<pre>";
        // print_r(session()->get('cart'));
        // echo"</pre>";

        $carts = session()->get('cart',[]);
        return view('client.layouts.pages.view-cart-detail',['carts' => $carts]);
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
            
            $cartComponent = view('client.components.cart_component',['carts' => $carts])->render();
            return response()->json([
                'code'=>200,
                'msg'=>'Xóa sản phẩm thành công!',
                'cart_component' => $cartComponent,
            ]);

        }
     }

      public function checkOut(Request $request)
      {
            $carts = session()->get('cart',[]);
            return view('client.layouts.pages.checkout',['carts' => $carts]);
      }

      public function addOrderCash(Request $request)
      {
        $carts = session()->get('cart',[]);
        if (isset($carts))
        {
            //  $checkOut = $this->cartService->checkOut($carts);
            //  $subTotal = $this->orderService->subTotal($carts);
             $this->orderService->add($request,$carts);
             session()->forget('cart');
        }
        //   return redirect()->route('home');
      }


}
