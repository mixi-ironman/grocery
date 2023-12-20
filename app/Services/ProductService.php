<?php

namespace App\Services;

use App\Repositories\ProductRepository;
use Illuminate\Support\Str;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

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
            // dd($request->all());
            // Tùy chỉnh các thông báo lỗi
            $customMessages = [
                'name_product.required' => 'Vui lòng nhập tên sản phẩm.',
                'name_product.unique' => 'Sản phẩm đã tồn tại!',
                'name_product.min' => 'Nhập tối thiểu 10 ký tự!',
                // 'name_product.regex' => 'Họ và tên không được chứa dấu cách và chỉ chấp nhận chữ cái.',
                'parent_id.required' => 'Vui lòng chọn một category cha từ trường chọn.',
                'category_id.required' => 'Vui lòng chọn một category con từ trường chọn.',
                // 'brand.required' => 'Vui lòng chọn ',
                'description.required' => 'Vui lòng nhập nội dung mô tả',
                'content.required' => 'Vui lòng nhập nội dung mô tả sản phẩm',
                'content.min' => 'Chỉ được nhập tối đa 300 ký tự',
                'price.required' => 'Vui lòng nhập giá bán',
                'old_price.required' => 'Vui lòng nhập giá niêm yết',
                'stock.required' => 'Vui lòng nhập số lượng sản phẩm',
                'image.required' => 'Vui lòng chọn hình ảnh',
                'price.numeric' => 'Số chỉ có thể chứa các ký tự số.',
                'price.min' => 'Số phải là số dương.',
            ];
            
            // Validate dữ liệu với các thông báo tùy chỉnh
            $validator = Validator::make($request->all(), [
                // required|unique:products,name_product
                'name_product' => 'required|min:10|unique:products,name',
                'parent_id' => 'required',
                // 'brand' => 'required',
                'category_id' => 'required',
                'description' => 'required',
                'content' => 'required|min:300',
                'price' => 'required|numeric|min:0',
                'old_price' => 'required|numeric|min:0',
                'stock' => 'required|numeric|min:0',
                'image' => 'required|image',
            ], $customMessages);

            // Kiểm tra nếu có lỗi
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            
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
                    'brand_id' => $request->input('brand'),
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
                    'brand_id' => $request->input('brand'),
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

            // return Redirect::route('products.index')->with('success', 'Thêm sản phẩm thành công!');
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

            $product = $this->productRepository->update($id, [
                'name' => $request->input('name_product'),
                'slug' => Str::slug($request->input('name_product'), '-'),
                'description' => $request->input('description'),
                'content' => $request->input('content'),
                'category_id' => $request->input('category_id'),
                'price' => $request->input('price'),
                'brand_id' => $request->input('brand'),
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

    //upload ảnh cục bộ trên ckeditor
    public function ckeditor_image( $request)
    {
        if($request->hasFile('upload'))
        {
            $originName = $request->file('upload')->getClientOriginalName();
            // chỉ lấy tên file ảnh vd 123.jpg thì chỉ lấy 123
            $fileName = pathinfo($originName, PATHINFO_FILENAME);

            //lấy đuôi hình ảnh
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = 'image-ckupload'.'_'.time().'.'.$extension;
            $request->file('upload')->move(public_path('uploads/ckeditor_image'), $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('uploads/ckeditor_image').'/'.$fileName;
            $message = 'Tải ảnh lên thành công';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$message')</script>";
            header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }
}
