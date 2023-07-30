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

    public function create()
    {
        //lấy ra danh mục cha
        $category_parent = $this->categoryService->getParentCategory();
        return view('admin.category.create',[
            'title'=>'Add Category',
            'category_parent' => $category_parent,
        ]);
    }

    public function store(CreateFormRequest $request)
    {
     
       //dd($request->all());
       $this->categoryService->store($request);

    //    Session::flash('success','Thêm danh mục thành công');
    //    return redirect()->back();
    //    return redirect()->route('categories.index');
          return redirect()->route('categories.index')->with('success', 'Created Category Successfully!');

    }

    public function show(string $id)
    {
        //
    }

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

    public function update(Request $request, string $id)
    {
        $this->categoryService->update($request,$id);
        return redirect()->route('categories.index')->with('success', 'Created Category Successfully!');
    }

    public function destroy(string $id)
    {
        $this->categoryService->destroy($id);
        return redirect()->route('categories.index')->with('success', 'Delete Category Successfully!');

    }
}
