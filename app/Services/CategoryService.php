<?php

namespace App\Services;

use App\Repositories\CategoryRepository;
use Illuminate\Support\Str;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
class CategoryService
{
    private $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    //get all category 
    public function getAllCategory()
    {
        return $this->categoryRepository->getCategories();
    }

    //get list category 
    public function getAll()
    {
        return $this->categoryRepository->getAll();
    }

    //get ra parent category
    public function getParentCategory()
    {
        return $this->categoryRepository->getParent();
    }

    //get category theo id
    public function getByCategoryId($id)
    {
        return $this->categoryRepository->getById($id);
    }

    public function store($request)
    {
    //    dd($request->all());
        try {
            DB::Begintransaction();
            $category = $this->categoryRepository->create([
            'name' => $request->input('name_category'),
            'slug' => Str::slug($request->input('name_category'), '-'),
            'description' => $request->input('description'),
            'parent_id' => $request->input('parent_id'),
            'is_active' => $request->input('is_active'),
          ]);
           DB::commit();
           
        //    return Redirect::route('categories.index')->with('success', 'Created Category Successfully!');
        //    return redirect()->route('categories.index')->with('success', 'Created Category Successfully!'); 
        } catch (\Exception $e) {
          DB::rollBack();
          return Redirect::back()->withErrors(['create' => 'Something Wrong!'])->withInput();
        }
    }

    public function update($request, $id)
    {
        // dd($request->input());
            // $parent_id = ($request->input('parent_id') != $id) ? $request->input('parent_id') : null;
        try {
            DB::beginTransaction();
            //handle nếu không chọn category thì không update category
            if ($request->input('parent_id') != $id) {
                $category = $this->categoryRepository->update($id, [
                    'name' => $request->input('name_category'),
                    'slug' => Str::slug($request->input('name_category'), '-'),
                    'description' => $request->input('description'),
                    'parent_id' => $request->input('parent_id'),
                    'is_active' => $request->input('is_active'),
                ]);
            } else {
                $category = $this->categoryRepository->update($id, [
                    'name' => $request->input('name_category'),
                    'slug' => Str::slug($request->input('name_category'), '-'),
                    'description' => $request->input('description'),
                    'is_active' => $request->input('is_active'),
                ]);
            }

            DB::commit();

            // return Redirect::route('categories.index')->with('success', 'Update Category Successfully!');
            //  return redirect()->route('categories.index')->with('success', 'Created Category Successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors(['update' => 'Something Wrong!'])->withInput();
        }
    }



    public function destroy($id)
    {
        $category = $this->categoryRepository->delete_($id);
    }

}
