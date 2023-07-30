<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductImageService;
use App\Services\ProductService;
class ProductImageController extends Controller
{

    private $productImageService;
    private $productService;

    public function __construct(ProductImageService $productImageService, ProductService $productService)
    {
        $this->productImageService = $productImageService;
        $this->productService = $productService;

    }

    public function index()
    {
        $productImages = $this->productImageService->getAllProductImage();
        // dd($productImages);
        return view('admin.product-image.index',['productImages' => $productImages]);
    }

    public function create()
    {
        $products = $this->productService->getAll_();
        return view('admin.product-image.create',['products' => $products]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
         $this->productImageService->store($request);
        return redirect()->route('product.images.index')->with('success', 'Created ProductImages Successfully!');

    }

    public function show(string $id)
    {
        
    }

    public function edit(string $id)
    {
        
    }

    public function update(Request $request, string $id)
    {
       
    }

    public function destroy(string $id)
    {
     
    }
}
