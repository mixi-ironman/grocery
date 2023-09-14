<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CouponService;
use Carbon\Carbon;
use App\Models\Coupon;

class CouponController extends Controller
{
    public function __construct(readonly CouponService $couponService)
    {
    }

    public function index()
    {
        $coupons = $this->couponService->getCoupon();
        // $expirationDate = Carbon::parse($coupon->expery_date);
        // $currentDate = Carbon::now();
        return view('admin.coupon.index',['coupons' => $coupons]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.coupon.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->couponService->store($request);
        return redirect()->route('coupons.index')->with('success', 'Created Coupon Successfully!'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $coupon = $this->couponService->getCouponById($id);
        return view('admin.coupon.edit',['coupon' => $coupon]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $coupon = Coupon::find($id);
        // dd($coupon);
            if ($coupon) {
                $coupon->delete();
               
                return response()->json([
                    'code' => 200,
                    'msg' => 'Xóa thành công',
                ]);
            } 
    }
}
