<?php

namespace App\Services;

use App\Repositories\ProductRepository;
use Illuminate\Support\Str;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

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

    // public function store($request)
    // {
    //     // dd($request->all());
    //     try {
    //         DB::Begintransaction();
    //         // Xử lý file hình ảnh
    //         if ($request->hasFile('image') && $request->file('image')->isValid()) {
    //             $imagePath = 'image'.time().'-'.uniqid().'.'.$request->file('image')->extension();
    //             //cách 1 move file
    //             $request->file('image')->move(public_path('uploads'), $imagePath);
    //             $imagePath = $request->file('image')->store('products', 'public'); // Lưu hình ảnh vào thư mục 'products' trong ổ đĩa 'public'

    //         } else {
    //             $imagePath = null; // Hoặc bạn có thể gán một giá trị mặc định nếu không có hình ảnh được tải lên
    //         }
    //         $product = $this->productRepository->create([
    //         'name' => $request->input('name_category'),
    //         'slug' => Str::slug($request->input('name_category'), '-'),
    //         'description' => $request->input('description'),
    //         'category_id' => $request->input('category_id'),
    //         'image' => $imagePath,
    //         'is_active' => $request->input('is_active'),
    //       ]);
    //        DB::commit();
           
    //        return Redirect::route('products.index')->with('success', 'Created Product Successfully!');
    //     } catch (\Exception $e) {
    //       DB::rollBack();
    //       return Redirect::back()->withErrors(['create' => 'Something Wrong!'])->withInput();
    //     }
    // }

    public function store($request)
    {
        // dd($request);

        try {
            DB::beginTransaction();
            // dd($request->hasFile('image'));
            // dd($request->file('image')->isValid());

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

            DB::commit();

            // return Redirect::route('products.index')->with('success', 'Created Product Successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors(['create' => 'Something Wrong!'])->withInput();
        }
    }

    public function update($request, $id)
    {
        try {
            DB::beginTransaction();

            // Lấy thông tin sản phẩm hiện tại từ cơ sở dữ liệu
            $product = $this->productRepository->getById($id);

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

            DB::commit();

            // Redirect về trang danh sách sản phẩm sau khi cập nhật thành công
            return redirect()->route('products.index')->with('success', 'Updated Product Successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors(['update' => 'Something Wrong!'])->withInput();
        }
    }


    public function destroy($id)
    {
        // dd($id);
        if($id != 0)
        {
            $category = $this->productRepository->delete($id);
        }
    }
}
