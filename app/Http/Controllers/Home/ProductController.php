<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Client\ProductService;

use App\Services\CategoryService;


class ProductController extends Controller
{
   
    public function __construct(readonly ProductService $productService,readonly CategoryService $categoryService)
    {
    }
    
    public function index($id, $slug)
    {
        $product = $this->productService->show($id);
        // dd($product);
        $products = $this->productService->getProducts();

        $carts = session()->get('cart',[]);
        if ($carts === null) {
        // Xử lý khi không có giỏ hàng
            $carts = [];
        }
        $category = $this->categoryService->getByCategoryId($product->category_id);
        $categories = $category->products;
        // dd($categories);
        return view('client.layouts.pages.view-product-detail',['product' => $product,'categories' => $categories,'carts' => $carts,'products'=>$products]);
    }

  
    public function show(string $id)
    {
        //
    }

  
}
