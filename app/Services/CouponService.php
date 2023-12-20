<?php

namespace App\Services;

use Illuminate\Support\Str;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Exceptions\CommonException;
use Illuminate\Support\Facades\Validator;
use App\Repositories\CouponRepository;
class CouponService
{

    public function __construct(readonly CouponRepository $couponRepository)
    {

    }

    public function store($request)
    {
        try {
            $customMessages = [
                'name_coupon.required' => 'Vui lòng nhập thông tin!',
                'name_coupon.unique' => 'Mã giảm giá đã tồn tại!',
                'type.required' => 'Vui lòng chọn',
                'expery_date.required' => 'Vui lòng chọn ngày hết hạn!',
                'value_coupon.required' => 'Vui lòng nhập giá trị!',
                'value_coupon.numeric' => 'Số chỉ có thể chứa các ký tự số.',
                'expery_date.after' => 'Ngày hết hạn phải lớn hơn ngày hiện tại.',
            ];
            
            // Validate dữ liệu với các thông báo tùy chỉnh
            $validator = Validator::make($request->all(), [
                'name_coupon' => 'required|unique:coupons,name',
                'type' => 'required',
                'value_coupon' => 'required|numeric',
                'expery_date' => 'required|date|after:now',
            ], $customMessages);

            // Kiểm tra nếu có lỗi
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            DB::Begintransaction();
            $coupon = $this->couponRepository->create([
                'name' => $request->input('name_coupon'),
                'type' => $request->input('type'),
                'value' => $request->input('value_coupon'),
                'expery_date' => $request->input('expery_date'),
                'usage_limit' => $request->input('usage_limit'),
            ]);
            DB::commit();
            return redirect()->route('coupons.create')->with('success', 'Tạo thành công!'); 
            
        } catch (\Exception $e) {
            DB::rollBack();
            throw new CommonException('Something wrong');
          return Redirect::back()->withErrors(['error' => 'tạo thất bại!'])->withInput();
        }
    }

    public function update($request, $id)
    {
        try {

            DB::beginTransaction();
            $coupon = $this->couponRepository->update($id, [
                'name' => $request->input('name_coupon'),
                'type' => $request->input('type'),
                'value' => $request->input('value_coupon'),
                'expery_date' => $request->input('expery_date'),
                'usage_limit' => $request->input('usage_limit'),
            ]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors(['update' => 'Something Wrong!'])->withInput();
        }
    }



    public function destroy($id)
    {

    }

    public function getCoupon()
    {
        return $this->couponRepository->getAll();
    }

    public function getCouponById($id)
    {
        return $this->couponRepository->getById($id);
    }
}
