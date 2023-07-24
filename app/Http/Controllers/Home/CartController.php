<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Client\ProductService;

class CartController extends Controller
{
    private $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;

    }
    public function index()
    {
       
        return view('client.layouts.pages.view-cart-detail'); 
    }

    public function addToCart(Request $request, $id)
    {
        //  session()->forget('cart');
         // Hoặc sử dụng session()->pull('cart') nếu bạn muốn lấy giỏ hàng và xóa nó khỏi session cùng lúc.
        // dd(session()->get('cart'));

        $product = $this->productService->getProductById($id);

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
        return response()->json(
            [
                'message' => 'succes',
                'code' => 200,
                'cart' => $cart,
            ]
        ,200);
        
        // return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào giỏ hàng.');
    }

     public function showCart(Request $request)
     {
        // echo"<pre>";
        // print_r(session()->get('cart'));
        // echo"</pre>";

        $carts = session()->get('cart');
        return view('client.layouts.pages.view-cart-detail',['carts' => $carts]);
     }

     public function deleteCart(Request $request)
     {
        // echo"<pre>";
        // print_r(session()->get('cart'));
        // echo"</pre>";

        $carts = session()->get('cart');
        return view('client.layouts.pages.view-cart-detail',['carts' => $carts]);
     }


}
