<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\View\Composers\MenuComposer;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
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
        $productNew = Product::latest()->limit(10)->get();
        $productFeatured = Product::where('is_featured', 1)->get();
        $productTopSale =  Product::where('is_onsale', 1)->get();
        $carts = session()->get('cart',[]);
        // dd($carts);
        $categoryList = Category::where('parent_id', 0)->get();

        //get rating product dùng quan hệ trong model thay vì
        $productsWithRating = DB::table('products')
        ->select('products.id', 'products.name', DB::raw('AVG(comments.rating) as average_rating'))
        ->leftJoin('comments', function ($join) {
            $join->on('products.id', '=', 'comments.commentable_id')
                ->where('comments.commentable_type', '=', 'product');
        })
        ->groupBy('products.id', 'products.name', /* Thêm các cột khác mà bạn đã chọn */)
        ->get();

        // dd($productsWithRating);
        return view('client.layouts.pages.home',[
            'products' => $products,
             'carts' => $carts,
             'categoryList'=>$categoryList,
             'rating' => $productsWithRating,
             'productNew' =>$productNew,
             'productFeatured' => $productFeatured,
             'productTopSale' => $productTopSale
        ]);  
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
        $carts = session()->get('cart',[]);
        $products = Product::where('is_active',1)->orderByDesc('created_at')->get();
        $categoryList = Category::where('parent_id', 0)->get();
      return view('client.layouts.pages.view-category-product',['carts' => $carts,'categoryList'=>$categoryList,'products'=>$products]);
    }

    public function autocompleteAjax(Request $request)
    {
        $data= $request->all();
        if($data['query'])
        {
            $products = Product::where('is_active',1)->where('name','LIKE',$data['query'].'%')->get();
            $product_component =  view('client.components.dropdown-input',['products_search'=>$products ])->render();
           
        }
        
        return response()->json([
            'msg'=>'Search success!',
            'product_component'=>$product_component,
            'products_search'=>$products
        ]);
    }

    public function getRating(Request $request)
    {
        $productsWithRating = DB::table('products')
        ->select('products.id', 'products.name', DB::raw('AVG(comments.rating) as average_rating'))
        ->leftJoin('comments', function ($join) {
            $join->on('products.id', '=', 'comments.commentable_id')
                ->where('comments.commentable_type', '=', 'product');
        })
        ->groupBy('products.id', 'products.name', /* Thêm các cột khác mà bạn đã chọn */)
        ->get();

        // dd($productsWithRating);
    }

    public function pageThankYou(Request $request)
    {
        return view('client.layouts.pages.thank-you');
    }
}
