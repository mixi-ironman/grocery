<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Services\CategoryService;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
class ProductController extends Controller
{
    private $productService;
       private $categoryService;

    public function __construct(ProductService $productService,CategoryService $categoryService)
    {
        $this->productService = $productService;
        $this->categoryService = $categoryService;

    }

    public function index()
    {
        $products = $this->productService->getAllProduct();

        // dd($products);
        return view('admin.product.index', ['products' => $products]);
    }

 
    public function create()
    {
        //lấy ra danh sách category
        $categories = $this->categoryService->getAll();
        return view('admin.product.create',[
            'title'=>'Add Product',
            'categories' => $categories,
        ]);
    }

    public function store(Request $request)
    {
        $this->productService->store($request);
        return redirect()->route('products.create')->with('success', 'Created Products Successfully!');
            // return Redirect::route('products.index')->with('success', 'Created Product Successfully!');
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        $product = $this->productService->getByProductId($id);
        $categories = $this->categoryService->getAll();
        // dd($product);
        return view('admin.product.edit',[
            'title'=>'Edit Product',
            // 'category_parent' => $category_parent,
            'product' => $product,
            'categories' => $categories,
        ]);
    }

    public function update(Request $request, string $id)
    {
         $this->productService->update($request,$id);
        return redirect()->route('products.index')->with('success', 'Update Product Successfully!');
    }

    public function destroy($id)
    {
         $this->productService->destroy($id);
        return redirect()->route('products.index')->with('success', 'Delete Product Successfully!');
    }
}
