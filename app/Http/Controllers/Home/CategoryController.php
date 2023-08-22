<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Client\ProductService;
use App\Services\OrderService;
use App\Models\Category;
use App\Models\Product;



class CategoryController extends Controller
{

    public function __construct()
    {

    }
    public function index($id, $slug)
    {
        // dd($id);
        $carts = session()->get('cart',[]);
        $categoryList = Category::where('parent_id', 0)->get();

        $categoryType = request()->query('category_type');
        if ($categoryType === 'parent') {
            //cách 1
            // $products = Product::whereIn('category_id', function ($query) use ($id) {
            //     $query->select('id')
            //         ->from('categories')
            //         ->where('parent_id', $id);
            // })->get();

            //cách 2
            $categoryCollection = Category::where('parent_id', $id)->get();//
            $categoryIds = $categoryCollection->pluck('id');
            if(count($categoryIds))
            {
                $products = Product::whereIn('category_id', $categoryIds)->get();
            }else{
                $products = Product::where('category_id',$id)->get();
            }
           
            
        } elseif ($categoryType === 'child') {
            $products = Product::where('category_id',$id)->get();
        } 

        // dd($products);
        return view('client.layouts.pages.view-category-product',['carts' => $carts,'categoryList'=>$categoryList,'products'=>$products,'categoryList'=>$categoryList]); 
    }
}
