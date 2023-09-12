<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Location;
use App\Services\Client\UserService;
class UserController extends Controller
{
    public function __construct(readonly UserService $userService )
    {
    }

    public function index()
    {
        $carts = session()->get('cart',[]);
        $provinces = Location::where('parent_id',0)->get();
        $districts = Location::where('parent_id',1)->get();
        $categoryList = Category::where('parent_id', 0)->get();

        return view('client.layouts.pages.account-detail',
                [
                    'provinces' => $provinces, 
                    'districts' => $districts, 
                    'carts' => $carts, 
                    'categoryList'=>$categoryList
                ]); 
    }

    public function create()
    {
      
    }

    public function store(Request $request)
    {
        return $this->userService->store($request);
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
