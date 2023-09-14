<?php

namespace App\Services;

use Illuminate\Support\Str;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Exceptions\CommonException;
use App\Repositories\CouponRepository;
class CouponService
{

    public function __construct(readonly CouponRepository $couponRepository)
    {

    }

    public function store($request)
    {
        try {
            DB::Begintransaction();
            $coupon = $this->couponRepository->create([
                'name' => $request->input('name_coupon'),
                'type' => $request->input('type'),
                'value' => $request->input('value_coupon'),
                'expery_date' => $request->input('expery_date'),
            ]);
           DB::commit();
           
           
        } catch (\Exception $e) {
            DB::rollBack();
            throw new CommonException('Something wrong');
        //   return Redirect::back()->withErrors(['error' => 'Something Wrong!'])->withInput();
        }
    }

    public function update($request, $id)
    {
       
        try {
            DB::beginTransaction();
            
            DB::commit();

             return Redirect::route('categories.index')->with('success', 'Update Category Successfully!');
            //  return redirect()->route('categories.index')->with('success', 'Created Category Successfully!');
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
