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

            // $validator = Validator::make($request->all(), [
            //     'name_user' => 'required|string',
            //     'email' => 'required|email|unique:users,email',
            //     'password' => 'required|min:8',
            //     'phone' => 'required',
            //     'address' => 'required',
            //     'status' => 'required',
            //     'district' => 'exists:locations,id',
            //     'ward' => 'exists:locations,id',
            // ]);

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
        } catch (\Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors(['create' => 'Something Wrong!'])->withInput();
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
            return Redirect::back()->withErrors(['update' => 'Something Wrong!'])->withInput();
        }
    }


    public function destroy($id)
    {
        $category = $this->sliderRepository->delete($id);
    }
}
