<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Services\CategoryService;
use App\Services\BrandService;
use App\Repositories\ProductRepository;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
class ProductController extends Controller
{

    public function __construct(
        readonly ProductService $productService,
        readonly CategoryService $categoryService,
        readonly BrandService $brandService,
        readonly ProductRepository $productRepository
    ){}

    public function index()
    {
        $products = $this->productService->getAllProduct();
        $products_ = $this->productRepository->getAll();
        // dd($products);
        return view('admin.product.index', ['products' => $products,'products_' => $products_]);
    }

 
    public function create()
    {
        //lấy ra danh sách category
        $parentCategories = $this->categoryService->getParentCategory();
        $categories = $this->categoryService->getAll();
        $brands = $this->brandService->getAllBrand();
        return view('admin.product.create',[
            'title'=>'Add Product',
            'categories' => $categories,
            'brands' => $brands,
            'parentCategories' => $parentCategories
        ]);
    }

    public function store(Request $request)
    {
        $this->productService->store($request);
        return Redirect::route('products.index')->with('success', 'Thêm sản phẩm thành công!');
    }


    public function show(string $id)
    {
        //
    }


    public function edit(Request $request,string $id)
    {
        $product = $this->productService->getByProductId($id);
        $brands = $this->brandService->getAllBrand();
        $parentCategories = $this->categoryService->getParentCategory();

        $categories = $this->categoryService->getAll();
        // dd($categories);
        return view('admin.product.edit',[
            'title'=>'Edit Product',
            // 'category_parent' => $category_parent,
            'product' => $product,
            'categories' => $categories,
            'brands' => $brands,
            'parentCategories' => $parentCategories

        ]);
    }

    public function update(Request $request, string $id)
    {
       return $this->productService->update($request, $id);
        // return redirect()->route('products.index')->with('success', 'Cập nhật sản phẩm thành công!');
    }

    public function destroy($id)
    {
        $this->productService->destroy($id);
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

    //upload ảnh cục bộ trên ckeditor
    public function ckeditor_image(Request $request)
    {
        return $this->productService->ckeditor_image($request);
       
    }
}
