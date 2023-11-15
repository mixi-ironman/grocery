<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;
use App\Repositories\UserRepository;
use App\Models\Location;

class UserController extends Controller
{
    public function __construct(
        readonly UserService $userService,
        readonly UserRepository $userRepository
        ) {}

    public function index()
    {
        $users = $this->userRepository->getAll();
        return view('admin.user.index',['users' => $users]);
    }

    public function create()
    {
        $provinces = Location::where('parent_id',0)->get();
        $districts = Location::where('parent_id',1)->get();
        return view('admin.user.create',['provinces' => $provinces, 'districts' => $districts]);
    }

    public function store(Request $request)
    {
        return $this->userService->store($request);
        // return redirect()->route('user.index')->with('success', 'Create User Successfully!');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $user = $this->userRepository->getById($id);
        $provinces = Location::where('parent_id',0)->get();
        $districts = Location::where('parent_id',1)->get();
        return view('admin.user.edit',[
            'user' => $user,
            'provinces' => $provinces,
            'districts' => $districts,
        ]);
    }

    public function update(Request $request, string $id)
    {
        return $this->userService->update($request,$id);
    }

    public function destroy(string $id)
    {
        //
    }

    public function getWard(Request $request)
    {
        if ($request->parent_id == 0) {
            return response()->json([]); // Trả về JSON trống nếu parent_id = 0
        }
        $parent_id = $request['parent_id'];
        // dd($parent_id);
        $wards = Location::where('parent_id', $parent_id)->get();

        //Muốn lấy dữ liệu thì cần
        //Kết quả cuối cùng cần là gì
        $childWard = $wards->map(function ($ward) {
            return [
                'id' => $ward->id,
                'text' => $ward->name,
            ];
        });

        return response()->json($childWard);
    }

}
