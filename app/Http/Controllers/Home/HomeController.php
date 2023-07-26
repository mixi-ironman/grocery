<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Services\Client\ProductService;

class HomeController extends Controller
{
    private $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $products = $this->productService->getProducts();
        $carts = session()->get('cart',[]);
        if ($carts === null) {
        // Xử lý khi không có giỏ hàng
            $carts = [];
        }
        // dd($carts);
        return view('client.layouts.pages.home',['products' => $products, 'carts' => $carts]); 
    }

    //load product
    public function loadProduct(Request $request)
    {
        // dd('loadProduct');
        $page = $request->input('page');
        $result = $this->productService->loadProduct($page);
        if(count($result) != 0){
            $html = view('client.components.product_cart_item',['products' => $result])->render();
            return response()->json([
                'html' => $html,
                'page' => $page
            ]);
        }

        return response()->json([
                'html' => ''
        ]);
    }
}
