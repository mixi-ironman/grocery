<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\View\Composers\MenuComposer;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Services\Client\ProductService;

class HomeController extends Controller
{
    // private $productService;

    public function __construct(readonly ProductService $productService)
    {
        // $this->productService = $productService;
    }

    public function index()
    {
        $products = $this->productService->getProducts();
        $carts = session()->get('cart',[]);
        // dd($carts);
        return view('client.layouts.pages.home',['products' => $products, 'carts' => $carts]); 
    }

    //load product
    public function loadProduct(Request $request)
    {
        $page = $request->input('page');
        $products = $this->productService->loadProduct($page);
        // dd($products);
        if(count($products) != 0){
            $result = view('client.components.product_cart_item',['products' => $products,'itemsPerRow' =>'1-5'])->render();
            return response()->json([
                    'code'=>200,
                    'msg'=>'Load số lượng sản phẩm thành công!',
                    'product_cart_item' => $result,
                    '$products' => $products,
                    'page' => $page
            ]);
        }
    }

    //view category-product
    public function viewCategory(Request $request)
    {
      return view('client.layouts.pages.view-category-product');
    }

    public function autocompleteAjax(Request $request)
    {
        $data= $request->all();
        if($data['query'])
        {
            $products = Product::where('is_active',1)->where('name','LIKE','%'.$data['query'].'%')->get();
            $product_component =  view('client.components.dropdown-input',['products_search'=>$products ])->render();
           
        }
        return response()->json([
            'msg'=>'Search success!',
            'product_component'=>$product_component,
            'products_search'=>$products
        ]);
    }
}
