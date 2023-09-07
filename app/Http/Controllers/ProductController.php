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
        $parentCategories = $this->categoryService->getParentCategory();
        $categories = $this->categoryService->getAll();
        return view('admin.product.create',[
            'title'=>'Add Product',
            'categories' => $categories,
            'parentCategories' => $parentCategories
        ]);
    }

    public function store(Request $request)
    {
        return $this->productService->store($request);
        // return Redirect::route('products.index')->with('success', 'Thêm sản phẩm thành công!');
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
        return $this->productService->update($request,$id);
        return redirect()->route('products.index')->with('success', 'Update Product Successfully!');
    }

    public function destroy($id)
    {
        return $this->productService->destroy($id);
        return redirect()->route('products.index')->with('success', 'Delete Product Successfully!');
    }

    public function uploadImage(Request $request)
    {
        if ($request->hasFile('file')) {
            $imagePath = $request->file('file')->store('images', 'public');
            // return response()->json(['location' => asset('storage/' . $imagePath)]);
            $imagePath = 'image'.time().'-'.uniqid().'.'.$request->file('image')->extension();
                // Cách 1: Sử dụng move() để lưu hình ảnh vào thư mục public/uploads
                // $request->file('image')->move(public_path('uploads'), $imagePath);
            return response()->json(['location' => asset('upload/'.$imagePath)]);

        }
        return response()->json(['error' => 'Image upload failed'], 400);
    }
}
