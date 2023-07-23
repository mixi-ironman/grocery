<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Client\ProductService;
use App\Services\CategoryService;


class ProductController extends Controller
{
    private $productService;
    private $categoryService;
    public function __construct(ProductService $productService,CategoryService $categoryService)
    {
        $this->productService = $productService;
         $this->categoryService = $categoryService;
    }
    
    public function index($id, $slug)
    {
        $product = $this->productService->show($id);
        // dd($product);
        $category = $this->categoryService->getByCategoryId($product->category_id);
        $categories = $category->products;
        // dd($categories);
        return view('client.layouts.pages.view-product-detail',['product' => $product,'categories' => $categories]);
    }

  
    public function show(string $id)
    {
        //
    }

  
}
