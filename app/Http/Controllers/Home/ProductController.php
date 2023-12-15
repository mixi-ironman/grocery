<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Client\ProductService;
use App\Services\Client\CommentService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Comment;
use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use App\Models\Brand;
use App\Models\FavoriteProduct;


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
        $categoryList = Category::where('parent_id', 0)->get();
        $tags = $product->tags;
        
        //lấy tag theo product
        // foreach($product->tags as $productTag)
        // {
        //     dd($productTag->name);
        // }
        
        $carts = session()->get('cart',[]);
        $categories = Category::with(['products'])->find($product->category_id); // Tải trước danh sách sản phẩm của tất cả các danh mục
        //
        $productRelated = Product::where('category_id', $product->category_id)->limit(5)->get();
        // $rating = Comment::where('commentable_id',$id)->where('commentable_type','product')->get();
        $rating = Comment::where('commentable_id',$id)->where('commentable_type','product')->avg('rating');
        if($rating === null){
            $rating = 0;
        }

        $rating = round($rating);
      
        return view('client.layouts.pages.view-product-detail',[
            'product' => $product,
            'categories' => $categories->products, 
            'carts' => $carts, 
            'rating' => $rating,
            'categoryList'=> $categoryList,
            'productRelated' => $productRelated,
            'productTags' => $tags
        ]);
    } 
    
    //load more
    public function loadComment(Request $request)
    {
        $product_id = $request->product_id;
        $comments = $this->commentService->show($product_id);
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
        return $comments = $this->commentService->store($request);
    }

    public function addToFavorites(Request $request, String $id)
    {
        DB::beginTransaction();

        try {
           
            $user = Auth::user();

            if (Auth::check()) {
                $user_id = $user->id;
                $userFavorites = DB::table('favorite_products')
                    ->where('user_id', $user_id)
                    ->pluck('product_id')
                    ->all();

                $isProductFavorite = in_array($id, $userFavorites);
                if($isProductFavorite)
                {
                    return response()->json([
                        'status' => 'exits',
                        'msg' => 'Sản phẩm này đã tồn tại',
                    ]);
                }else{
                    $favorite = FavoriteProduct::create([
                        'user_id' => $user_id,
                        'product_id' => $id
                    ]);
                    DB::commit();
                    return response()->json([
                        'status' => 'success',
                        'msg' => 'Thêm sản phẩm yêu thích thành công',
                    ], 200);
                }
            }else{
                return response()->json([
                    'status' => 'error',
                    'msg' => 'Thêm sản phẩm yêu thích thất bại',
                ]);
            }
            
        } catch (\Exception $e) {
            // Nếu có lỗi xảy ra, hủy bỏ các thay đổi và không lưu vào cơ sở dữ liệu
            DB::rollback();
            return response()->json([
                'status' => 'error',
                'msg' => 'Có lỗi xảy ra. Vui lòng thử lại sau',
            ], 500);
        }
    }

    public function tag(Request $request, String $product_tag)
    {
        $carts = session()->get('cart',[]);
        // $products = Product::where('is_active',1)->where('name','LIKE',$product_tag.'%')->get();
        $products = Product::where('is_active', 1)
        ->whereHas('tags', function ($query) use ($product_tag) {
            $query->where('name', 'LIKE', '%' . $product_tag . '%');
        })
        ->get();

        $categoryList = Category::where('parent_id', 0)->get();
        return view('client.layouts.pages.view-category-product',['carts' => $carts,'categoryList'=>$categoryList,'products'=>$products]);
    }

    public function filterByPrice(Request $request)
    {
        $minPrice = $request->vl;
        $maxPrice = $request->vl_;
        if ($minPrice == 0 && $maxPrice == 0) {
            // Trường hợp 1: Cả $minPrice và $maxPrice đều bằng 0
            $products = Product::all();
            
        } elseif ($minPrice != 0 && $maxPrice == 0) {
            // Trường hợp 2: $minPrice khác 0 và $maxPrice bằng 0
            $products = Product::where('price', '<=', $minPrice)
                    ->orderBy('price', 'asc')
                    ->get();
        } else {
            // Trường hợp 3: $minPrice và $maxPrice có giá trị khác 0
            $products = Product::whereBetween('price', [$minPrice, $maxPrice])
                    ->orderBy('price', 'asc')
                    ->get();
        }

        if(count($products) != 0){
            $result = view('client.components.product_cart_item',['products' => $products,'itemsPerRow' =>'3'])->render();
            return response()->json([
                    'code'=>200,
                    'msg'=>'Load số lượng sản phẩm thành công!',
                    'products_filter_by_price' => $result,
                    '$products' => $products,
            ]);
        }else{
            return response()->json([
                'code'=> 'error',
                'msg'=>'Không có sản phẩm',
            ]);
        }
    }

    public function filterByBrand(Request $request,string $brandSlug)
    {
        $brand = Brand::where('slug', $brandSlug)->firstOrFail();
        $products = Product::where('brand_id', $brand->id)->get();
        $carts = session()->get('cart',[]);
        $categoryList = Category::where('parent_id', 0)->get();
        return view('client.layouts.pages.view-category-product',['carts' => $carts,'categoryList'=>$categoryList,'products'=>$products]);
    }
}
