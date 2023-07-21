<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Category\CreateFormRequest;
use App\Services\CategoryService;
use Illuminate\Support\Facades\Session;
class CategoryController extends Controller
{
   private $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //c1 dd(Route::is('categories.index')); // định nghĩa rote name có đang đúng route đang vào không
        
        //c2  // định nghĩa rote name có đang đúng route đang vào không
        // dd($request->is('admin/categories'));
        //bên view vào nút bên sidebar {{ request()->routeIs('categories.index') ? active : '' }}
        // nut to ngoài cùng: {{ request()->routeIs('categories.*') ? true : false }}

        $categories = $this->categoryService->getAllCategory();

        return view('admin.category.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //lấy ra danh mục cha
        $category_parent = $this->categoryService->getParentCategory();
        return view('admin.category.create',[
            'title'=>'Add Category',
            'category_parent' => $category_parent,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateFormRequest $request)
    {
       //dd($request->all());
       
       $this->categoryService->store($request);
       
       Session::flash('success','Thêm danh mục thành công');
       return redirect()->back();
    //    return redirect()->route('categories.index');

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
        $category = $this->categoryService->getByCategoryId($id);
        $category_parent = $this->categoryService->getParentCategory();
        return view('admin.category.edit',[
            'title'=>'Edit Category',
            'category_parent' => $category_parent,
            'categories' => $category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($id);
        // dd($request->input());
        $this->categoryService->update($request,$id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd($id);
        $this->categoryService->destroy($id);
    }
}
