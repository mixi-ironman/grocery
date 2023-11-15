<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Category\CreateFormRequest;
use App\Services\CategoryService;
use App\Models\Category;

use Illuminate\Support\Facades\Session;
class CategoryController extends Controller
{
   private $categoryService;
   private $htmlOption;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
        $this->htmlOption = '';
    }

    public function index(Request $request)
    {
        //c1 dd(Route::is('categories.index')); // định nghĩa rote name có đang đúng route đang vào không
        
        //c2  // định nghĩa rote name có đang đúng route đang vào không
        // dd($request->is('admin/categories'));
        //bên view vào nút bên sidebar {{ request()->routeIs('categories.index') ? active : '' }}
        // nut to ngoài cùng: {{ request()->routeIs('categories.*') ? true : false }}

        $categories = $this->categoryService->getAll();

        return view('admin.category.index', ['categories' => $categories]);
    }

    public function create()
    {
        $htmlMenu = $this->categoryrRecusive(0);
        //lấy ra danh mục cha
        $category_parent = $this->categoryService->getParentCategory();
        return view('admin.category.create',[
            'title'=>'Add Category',
            'category_parent' => $category_parent,
        ]);
    }

    public function store(CreateFormRequest $request)
    {
     
        return $this->categoryService->store($request);

    //    Session::flash('success','Thêm danh mục thành công');
    //    return redirect()->back();
    //    return redirect()->route('categories.index');
        //   return redirect()->route('categories.index')->with('success', 'Created Category Successfully!');

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
        return $this->categoryService->update($request,$id);
        // return redirect()->route('categories.index')->with('success', 'Update Category Successfully!');
    }

    public function destroy(string $id)
    {
        $this->categoryService->destroy($id);
        return redirect()->route('categories.index')->with('success', 'Delete Category Successfully!');

    }

    //handle menu đa cấp
    public function categoryrRecusive($id, $text = '')
    {
        $data = Category::all();
        foreach ($data as $value){
            if($value['parent_id'] == $id)
            {
            $this->htmlOption .= "<option>".$text. $value['name']."</option>";
                self::categoryrRecusive($value['id'], $text.'-');
            }
        }

        return $this->htmlOption;
    }

    public function getChildrenByParent_id(Request $request)
    {
        if ($request->parent_id == 0) {
            // return response()->json([]);
            return "sai rồi";
        }

        $categories = Category::where('parent_id', $request->parent_id)->get();
        $childCategory =  $categories->map(function ($category) {
            return [
                'id' => $category->id,
                'text' => $category->name,
            ];
        });

        return response()->json($childCategory);
    }
}
