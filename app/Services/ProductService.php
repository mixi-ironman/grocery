<?php

namespace App\Services;

use App\Repositories\ProductRepository;
use Illuminate\Support\Str;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Models\ProductTag;
use App\Models\Category;



class ProductService
{
    private $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }
    public function getAll_()
    {
        return $this->productRepository->getAll();
    }

    //get all category
    public function getAllProduct()
    {
        return $this->productRepository->getProducts();
    }

    //get product theo id
    public function getByProductId($id)
    {
        return $this->productRepository->getById($id);
    }

    public function store($request)
    {
        try {
            DB::beginTransaction();
            // Xử lý file hình ảnh
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $imagePath = 'image'.time().'-'.uniqid().'.'.$request->file('image')->extension();
                // Cách 1: Sử dụng move() để lưu hình ảnh vào thư mục public/uploads
                $request->file('image')->move(public_path('uploads'), $imagePath);

                // Cách 2: Sử dụng store() để lưu hình ảnh vào thư mục 'uploads' trong ổ đĩa 'public'
                // $imagePath = $request->file('image')->store('uploads', 'public');
            } else {
                $imagePath = null; 
            }
            // cách khác
            // $product = $this->getById($id);
            // $product->create([]);

            // Kiểm tra xem danh mục cha có danh mục con hay không
            $category = Category::find($request->input('parent_id'));
            if (!$category) {
                return back()->with('error', 'Không tìm thấy danh mục.');
            }
            // dd($category->childrentCategory->isEmpty());
            if ($category->childrentCategory->isEmpty()) {
                $category_id = $category->id;

                $product = $this->productRepository->create([
                    'name' => $request->input('name_product'),
                    'slug' => Str::slug($request->input('name_product'), '-'),
                    'description' => $request->input('description'),
                    'content' => $request->input('content'),
                    'category_id' => $category_id,
                    'price' => $request->input('price'),
                    'old_price' => $request->input('old_price'),
                    'stock' => $request->input('stock'),
                    'image' => $imagePath,
                    'is_active' => $request->input('is_active'),
                ]);
    
                $productId = $product->id;
                $selectedTags = $request->input('tags'); 
                if( $selectedTags)
                {
                    // Loại bỏ giá trị trùng lặp và thêm vào bảng productTag
                    $uniqueTags = array_unique($selectedTags);
                    foreach ($uniqueTags as $tagId) {
                        ProductTag::create([
                            'product_id' => $productId,
                            'tag_id' => $tagId
                        ]);
                    }
                }
                DB::commit();

            }else{
                $product = $this->productRepository->create([
                    'name' => $request->input('name_product'),
                    'slug' => Str::slug($request->input('name_product'), '-'),
                    'description' => $request->input('description'),
                    'content' => $request->input('content'),
                    'category_id' => $request->input('category_id'),
                    'price' => $request->input('price'),
                    'old_price' => $request->input('old_price'),
                    'stock' => $request->input('stock'),
                    'image' => $imagePath,
                    'is_active' => $request->input('is_active'),
                ]);
    
                $productId = $product->id;
                $selectedTags = $request->input('tags'); 
                if( $selectedTags)
                {
                    // Loại bỏ giá trị trùng lặp và thêm vào bảng productTag
                    $uniqueTags = array_unique($selectedTags);
                    foreach ($uniqueTags as $tagId) {
                        ProductTag::create([
                            'product_id' => $productId,
                            'tag_id' => $tagId
                        ]);
                    }
                }
                DB::commit();
            }

            return Redirect::route('products.index')->with('success', 'Thêm sản phẩm thành công!');
        } catch (\Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors(['create' => 'Thêm sản phẩm thất bại ^.^'])->withInput();
        }
    }

    public function update($request, $id)
    {
        try {
            DB::beginTransaction();

            // Lấy thông tin sản phẩm hiện tại từ cơ sở dữ liệu
            $product = $this->productRepository->getById($id);
            if ($request->ajax()) {
                $product = $this->productRepository->getById($id);
                if ($product) {
                    $changedAttributes = [];
            
                    if ($request->has('is_active') && $product->is_active != $request->is_active) {
                        $changedAttributes['is_active'] = $request->is_active;
                    }
            
                    if ($request->has('is_featured') && $product->is_featured != $request->is_featured) {
                        $changedAttributes['is_featured'] = $request->is_featured;
                    }
            
                    if ($request->has('is_onsale') && $product->is_onsale != $request->is_onsale) {
                        $changedAttributes['is_onsale'] = $request->is_onsale;
                    }
            
                    if (!empty($changedAttributes)) {
                        // dd($changedAttributes);
                        $this->productRepository->update($id, $changedAttributes);
                        DB::commit();
            
                        return response()->json([
                            'title' => 'Update Status',
                            'message' => 'Update Status for ' . $product->name . ' successfully!',
                            'changed_attributes' => $changedAttributes,
                        ]);
                    } else {
                        return response()->json([
                            'title' => 'No Update',
                            'message' => 'No changes to update.',
                        ]);
                    }
                } else {
                    return response()->json([
                        'title' => 'Product Not Found',
                        'message' => 'Product with ID ' . $id . ' not found.',
                    ], 404);
                }
            }
            

            // Xử lý file hình ảnh nếu người dùng tải lên hình ảnh mới
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $imagePath = 'image'.time().'-'.uniqid().'.'.$request->file('image')->extension();
                // Cách 1: Sử dụng move() để lưu hình ảnh vào thư mục public/uploads
                $request->file('image')->move(public_path('uploads'), $imagePath);
                // Cách 2: Sử dụng store() để lưu hình ảnh vào thư mục 'uploads' trong ổ đĩa 'public'
                // $imagePath = $request->file('image')->store('uploads', 'public');

            // // Xóa hình ảnh cũ nếu có
            // if ($product->image && Storage::exists($product->image)) {
            //     Storage::delete($product->image);
            // }

            // Xóa hình ảnh cũ nếu có
            if ($product->image && file_exists(public_path('uploads/' . $product->image))) {
                unlink(public_path('uploads/' . $product->image));
            }
            } else {
                // Nếu người dùng không tải lên hình ảnh mới, giữ nguyên đường dẫn hình ảnh hiện tại
                $imagePath = $product->image;
            }

            $category = $this->productRepository->update($id, [
                'name' => $request->input('name_product'),
                'slug' => Str::slug($request->input('name_product'), '-'),
                'description' => $request->input('description'),
                'content' => $request->input('content'),
                'category_id' => $request->input('category_id'),
                'price' => $request->input('price'),
                'old_price' => $request->input('old_price'),
                'stock' => $request->input('stock'),
                'image' => $imagePath,
                'is_active' => $request->input('is_active'),
            ]);

            $selectedTags = $request->input('tags'); 
                if( $selectedTags)
                {
                    // Loại bỏ giá trị trùng lặp và thêm vào bảng productTag
                    $uniqueTags = array_unique($selectedTags);
                    foreach ($uniqueTags as $tagId) {
                        ProductTag::create([
                            'product_id' => $id,
                            'tag_id' => $tagId
                        ]);
                    }
            }

            DB::commit();
            return redirect()->route('products.index')->with('success', 'Cập nhật sản phẩm thành công!');
        } catch (\Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors(['update' => 'Cập nhật sản phẩm thất bại ^.^!'])->withInput();
        }
    }


    public function destroy($id)
    {
        // dd($id);
        if($id != 0)
        {
            $product = $this->productRepository->delete($id);
        }
    }
}
