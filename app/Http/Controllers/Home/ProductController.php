<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Client\ProductService;
use App\Services\Client\CommentService;

use App\Services\CategoryService;


class ProductController extends Controller
{
   
    public function __construct(readonly ProductService $productService,readonly CategoryService $categoryService,readonly CommentService $commentService)
    {
    }
    
    public function index($id, $slug)
    {
        $product = $this->productService->show($id);
        // dd($product);
        $products = $this->productService->getProducts();

        $carts = session()->get('cart',[]);
        if ($carts === null) {
        // Xử lý khi không có giỏ hàng
            $carts = [];
        }
        $category = $this->categoryService->getByCategoryId($product->category_id);
        $categories = $category->products;
        // dd($categories);
        return view('client.layouts.pages.view-product-detail',['product' => $product,'categories' => $categories,'carts' => $carts,'products'=>$products]);
    }
  
    public function loadComment(Request $request)
    {
        $product_id = $request->product_id;
        $comments = $this->commentService->show($product_id);

        // dd($comments);
        $html = '';

        foreach($comments as $id => $comment){
        $html .= '
            <li class="comment-item" ">
                        <img class="comment-user-img" src="https://www.simplemost.com/wp-content/uploads/2020/05/Screen-Shot-2020-05-19-at-23.37.41.png" alt="avatar">
                        <div class="comment-text">
                            <div class="star-cmt">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="comment-meta">
                                <span>'.$comment->name.'</span>
                                -
                                <span>'.$comment->created_at->format('d/m/Y h:i:s').'</span>
                            </div>
                            <div class="comment-description">
                                <p>
                                    '.$comment->content.'
                                </p>
                            </div>
                        </div>
                    </li>
        ';
        }

        return $html;
    }

    public function sentComment(Request $request)
    {
      $comments = $this->commentService->store($request);
      
    }

  
}
