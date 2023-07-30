<?php

namespace App\Services;

use Illuminate\Support\Str;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

use App\Repositories\ProductImageRepository;

class ProductImageService
{
     private $productImageRepository;

    public function __construct(ProductImageRepository $productImageRepository)
    {
        $this->productImageRepository = $productImageRepository;
    }

    public function getAllProductImage(){
        return $this->productImageRepository->All();
    }

    //get by id
    public function getSliderById($id){
        return $this->productImageRepository->getById($id);
    }

    
    public function store($request)
    {
    // dd('store service');
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

            $productImages = $this->productImageRepository->create([
                'image_path' => $imagePath,
                'product_id' => $request->input('product_id'),
                'is_default' => $request->input('is_default'),
            ]);

            DB::commit();

            // return Redirect::route('sliders.index')->with('success', 'Create Slider Successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors(['error' => 'Something Wrong!'])->withInput();
        }
    }

    public function update($request, $id)
    {
        try {
            DB::beginTransaction();

            // Lấy thông tin sản phẩm hiện tại từ cơ sở dữ liệu
            $slider = $this->productImageRepository->getById($id);

            // Xử lý file hình ảnh nếu người dùng tải lên hình ảnh mới
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $imagePath = 'image'.time().'-'.uniqid().'.'.$request->file('image')->extension();
                // Cách 1: Sử dụng move() để lưu hình ảnh vào thư mục public/uploads
                $request->file('image')->move(public_path('uploads'), $imagePath);
                // Cách 2: Sử dụng store() để lưu hình ảnh vào thư mục 'uploads' trong ổ đĩa 'public'
                // $imagePath = $request->file('image')->store('uploads', 'public');

            // // Xóa hình ảnh cũ nếu có
            // if ($slider->image && Storage::exists($slider->image)) {
            //     Storage::delete($slider->image);
            // }

            // Xóa hình ảnh cũ nếu có
            if ($slider->image && file_exists(public_path('uploads/' . $slider->image))) {
                unlink(public_path('uploads/' . $slider->image));
            }
            } else {
                // Nếu người dùng không tải lên hình ảnh mới, giữ nguyên đường dẫn hình ảnh hiện tại
                $imagePath = $slider->image;
            }

            $slider = $this->productImageRepository->update($id, [
                'name' => $request->input('name_slider'),
                'description' => $request->input('description'),
                'image' => $imagePath,
                'is_active' => $request->input('is_active'),
            ]);

            DB::commit();

            // Redirect về trang danh sách sản phẩm sau khi cập nhật thành công
            // return redirect()->route('sliders.index')->with('success', 'Updated Slider Successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors(['update' => 'Something Wrong!'])->withInput();
        }
    }


    public function destroy($id)
    {
        $category = $this->productImageRepository->delete($id);
    }
}
