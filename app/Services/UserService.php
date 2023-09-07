<?php

namespace App\Services;

use Illuminate\Support\Str;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

use App\Repositories\UserRepository;

class UserService
{
     private $sliderRepository;

    public function __construct()
    {
    }

    
    public function store($request)
    {
    // dd('store service');
        try {
            DB::beginTransaction();

            
            DB::commit();

        } catch (\Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors(['create' => 'Something Wrong!'])->withInput();
        }
    }

    public function update($request, $id)
    {
        try {
            DB::beginTransaction();

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
        $category = $this->sliderRepository->delete($id);
    }
}
