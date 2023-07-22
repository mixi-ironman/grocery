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
        // dd($products);
        return view('client.layouts.pages.home',['products' => $products]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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

    //load product
    public function loadProduct(Request $request)
    {
        $page = $request->input('page');
        $result = $this->productService->loadProduct($page);
        if(count($result) != 0){
            $html = view('client.components.layouts.pages.home',['products' => $result])->render();
            return response()->json([
                'html' => $html
            ]);
        }

        return response()->json([
                'html' => ''
        ]);
    }
}
