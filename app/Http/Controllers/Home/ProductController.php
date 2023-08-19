<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Client\ProductService;
use App\Services\Client\CommentService;
use App\Models\Comment;
use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;



use App\Services\CategoryService;


class ProductController extends Controller
{
   
    public function __construct(
        readonly ProductService $productService,
        readonly CategoryService $categoryService,
        readonly CommentService $commentService,
        readonly Tag $tag
    ){}
    
    public function index($id, $slug)
    {
        $product = Product::with(['category'])->find($id);

        //lấy tag theo product
        // foreach($product->tags as $productTag)
        // {
        //     dd($productTag->name);
        // }
        
        $carts = session()->get('cart',[]);
        $categories = Category::with(['products'])->find($product->category_id); // Tải trước danh sách sản phẩm của tất cả các danh mục

        // $rating = Comment::where('commentable_id',$id)->where('commentable_type','product')->get();
        $rating = Comment::where('commentable_id',$id)->where('commentable_type','product')->avg('rating');
        if($rating === null){
            $rating = 0;
        }

        $rating = round($rating);
      
        return view('client.layouts.pages.view-product-detail',['product' => $product, 'categories' => $categories->products, 'carts' => $carts, 'rating' => $rating]);
    }
  
    public function loadComment(Request $request)
    {
        $product_id = $request->product_id;
        $comments = $this->commentService->show($product_id);

        // dd($comments);
        $html = '';

        foreach($comments as $id => $comment){
        $html .= '
        <li class="comment-item">
            <img class="comment-user-img" src="https://www.simplemost.com/wp-content/uploads/2020/05/Screen-Shot-2020-05-19-at-23.37.41.png" alt="avatar">
            <div class="comment-text">
                <ul class="list-line rating" title="Average Rating" style="display:flex;margin:0;padding:0">';
                for ($count = 1; $count <= 5; $count++) {
                    $color = ($count <= $comment?->rating) ? 'color:#ffcc00;' : 'color:#ccc;';
                    $html .= '
                        <li 
                            style="cursor:pointer;'. $color .' font-size:30px;"
                        >
                            &#9733
                        </li>';
                }
            $html .= '
                </ul>
                <div class="comment-meta">
                    <span>'. $comment->name .'</span>
                    -
                    <span>'. $comment->created_at->format('d/m/Y h:i:s') .'</span>
                </div>
                <div class="comment-description">
                    <p>
                        '. $comment->content .'
                    </p>
                </div>
            </div>
        </li>';

        }

        return $html;
    }

    public function sentComment(Request $request)
    {
      $comments = $this->commentService->store($request);
      
    }

  
}
