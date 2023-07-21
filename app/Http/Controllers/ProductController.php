<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Requests\Category\CreateFormRequest;
use App\Services\ProductService;
use App\Services\CategoryService;

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
        $categories = $this->categoryService->getAll();
        dd( $categories);
        // dd($products);
        return view('admin.product.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //lấy ra danh sách category
        $category_parent = $this->productService->getParentCategory();
        return view('admin.category.create',[
            'title'=>'Add Category',
            'category_parent' => $category_parent,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
