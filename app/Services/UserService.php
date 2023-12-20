<?php

namespace App\Services;

use Illuminate\Support\Str;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Models\Address;
use App\Models\Location;
use Illuminate\Support\Facades\Validator;


class UserService
{
     private $sliderRepository;

    public function __construct(readonly UserRepository $userRepository)
    {
    }

    
    public function store($request)
    {
        try {
            DB::beginTransaction();
            $province = $request->input('parent_id');
            $district = $request->input('district');
            $ward = $request->input('ward');
            $customMessages = [
                'name_user.required' => 'Vui lòng nhập thông tin!',
                'email.required' => 'Vui lòng nhập thông tin!',
                'address.required' => 'Vui lòng nhập thông tin!',
                'status.required' => 'Vui lòng nhập thông tin!',
                'email.required' => 'Vui lòng nhập thông tin!',
                'name_user.string' => 'Vui lòng chỉ nhập chuỗi!',
                'phone.numeric' => 'Định dạng chỉ chứa ký tự số.',
                'phone.min' => 'Nhập tối thiểu 10 số',
            ];
            
            // Validate dữ liệu với các thông báo tùy chỉnh
            $validator = Validator::make($request->all(), [
                'name_user' => 'required|string',
                // 'email' => 'required|email|unique:users,email',
                'email' => 'required',
                'password' => 'required|min:6',
                'phone' => 'required|numeric|min:10',
                'address' => 'required',
                'status' => 'required',
            ], $customMessages);

            // Kiểm tra nếu có lỗi
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            $user = $this->userRepository->create([
                'name' => $request->input('name_user'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
                'status' => $request->input('status'),
                // 'remember_token' => Str::random(40)
            ]);

            if ($request->has('district') && $request->has('ward')) {
                $district = Location::find($request->input('district'));
                $ward = Location::find($request->input('ward'));
    
                Address::create([
                    'user_id' => $user->id,
                    'name' => $user->name,
                    'province' => 'Hà Nội',
                    'district' => $district->name,
                    'ward' => $ward->name,
                ]);
            }

            DB::commit();
            return redirect()->route('user.index')->with('success', 'Create User Successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return  redirect()->back()->withErrors(['create' => 'Something Wrong!'])->withInput();
        }
    }

    public function update($request, $id)
    {
        try {
            DB::beginTransaction();
            if ($request->ajax()) {
                $user = $this->userRepository->update($id, [
                    'status' => $request['status'],
                ]);

                // dd($user->status);
                DB::commit();
                return response()->json([
                    'code' => 200,
                    'title'=> 'Update Status',
                    'message' => 'Update Status for ' . $user->name . ' successfully!',
                    'status' => $user->status,
                ]);
            }
            // $customMessages = [
            //     'name_user.required' => 'Vui lòng nhập thông tin!',
            //     'email.required' => 'Vui lòng nhập thông tin!',
            //     'phone.required' => 'Vui lòng nhập thông tin!',
            //     'password.required' => 'Vui lòng nhập thông tin!',
            //     'address.required' => 'Vui lòng nhập thông tin!',
            //     'status.required' => 'Vui lòng nhập thông tin!',
            //     'email.required' => 'Vui lòng nhập thông tin!',
            //     'name_user.string' => 'Vui lòng chỉ nhập chuỗi!',
            //     'phone.numeric' => 'Định dạng chỉ chứa ký tự số.',
            //     'phone.min' => 'Nhập tối thiểu 9 số',
            //     'password.min' => 'Nhập tối thiểu 6 số',
            // ];
            
            // // Validate dữ liệu với các thông báo tùy chỉnh
            // $validator = Validator::make($request->all(), [
            //     'name_user' => 'required|string',
            //     // 'email' => 'required|email|unique:users,email',
            //     'email' => 'required',
            //     'password' => 'required|min:6',
            //     'phone' => 'required|numeric',
            //     'address' => 'required',
            //     'status' => 'required',
            // ], $customMessages);

            // // Kiểm tra nếu có lỗi
            // if ($validator->fails()) {
            //     return redirect()->back()
            //         ->withErrors($validator)
            //         ->withInput();
            // }

            $user = $this->userRepository->update($id, [
                'name' => $request->input('name_user'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
                'status' => $request->input('status'),
            ]);

            DB::commit();

            return redirect()->route('user.index')->with('success', 'Update User Successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return  redirect()->back()->withErrors(['update' => 'Something Wrong!'])->withInput();
        }
    }


    public function destroy($id)
    {
        $category = $this->sliderRepository->delete($id);
    }
}
