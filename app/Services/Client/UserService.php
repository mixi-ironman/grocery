<?php

namespace App\Services\Client;

use Illuminate\Support\Str;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Location;
use App\Models\Address;
use App\Repositories\Client\UserRepository;
use App\Repositories\Client\AddressRepository;

class UserService
{

    public function __construct(
            readonly UserRepository $userRepository,
            readonly AddressRepository $addressRepository,
        ){}

    public function store($request)
    {
         try {
            DB::beginTransaction();
            
            if (Auth::check()) {
                $user = Auth::user();
                $district = Location::find($request->district);
                $ward = Location::find($request->ward);
                if($request->status == 1)
                {
                    $addressStatus = [
                        '0' => false, 
                        '1' => true, 
                    ];

                    Address::where('user_id', $user->id)->update(['is_default' => $addressStatus['0']]);
                }

                $address = $this->addressRepository->create([
                    'user_id' => $user->id,
                    'name' => $request->name_user,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'province' => 'Hà Nội',
                    'district' => $district->name,
                    'ward' => $ward->name,
                    'address_details' => $request->address,
                    'is_default' => $request->status,
                ]);
    
                DB::commit();
            } else {
                // Người dùng chưa đăng nhập.
            }
            
            return redirect()->route('customer.profile')->with('success', 'Tạo địa chỉ thành công!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors(['create' => 'Something Wrong!'])->withInput();
        }
    }

    public function update($request, $id)
    {
        try {
            DB::beginTransaction();

            $user = $this->userRepository->update($id, [
                'name' => $request->input('user_name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
            ]);

            DB::commit();

            return redirect()->route('customer.profile')->with('success', 'Update User Successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors(['update' => 'Something Wrong!'])->withInput();
        }
    }
}
