<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BrandService;

class BrandController extends Controller
{
    public function __construct(
        readonly BrandService $brandService,
        // readonly CategoryService $categoryService,
        // readonly ProductRepository $productRepository
    ){}

    public function index()
    {
        $brands = $this->brandService->getAllBrand();
        return view('admin.brand.index',['brands' => $brands]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->brandService->store($request);
        return redirect()->route('brand.index')->with('success', 'Created Slider Successfully!');
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
        $brand = $this->brandService->getBrandById($id);
        // dd($product);
        return view('admin.brand.edit',[
            'title'=>'Edit Slider',
            'brand' => $brand,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->brandService->update($request,$id);
        return redirect()->route('brand.index')->with('success', 'Update Brand Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->brandService->destroy($id);
        return redirect()->route('brand.index')->with('success', 'Xóa thành công thương hiệu!');
    }
}
