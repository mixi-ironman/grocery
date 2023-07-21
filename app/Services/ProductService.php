<?php

namespace App\Services;

use App\Repositories\ProductRepository;
use Illuminate\Support\Str;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
class ProductService
{
    private $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    //get all category
    public function getAllProduct()
    {
        return $this->productRepository->getProducts();
    }

    //get ra parent category
    public function getParentCategory()
    {
        return $this->productRepository->getParent();
    }

    //get category theo id
    public function getByCategoryId($id)
    {
        return $this->productRepository->getCategory($id);
    }

    public function store($request)
    {
    //    dd($request->all());
        try {
            DB::Begintransaction();
            $category = $this->productRepository->create([
            'name' => $request->input('name_category'),
            'slug' => Str::slug($request->input('name_category'), '-'),
            'description' => $request->input('description'),
            'parent_id' => $request->input('parent_id'),
            'is_active' => $request->input('is_active'),
          ]);
           DB::commit();
           
        //    return Redirect::route('categories.index')->with('success', 'Created Category Successfully!');
            return redirect()->route('catregories.index')->with('success', 'Created Category Successfully!');
        } catch (\Exception $e) {
          DB::rollBack();
          return Redirect::back()->withErrors(['create' => 'Something Wrong!'])->withInput();
        }
    }

    public function update($request,$id)
    {
         // dd($request->input());
        // $parent_id = ($request->input('parent_id') != $id) ? $request->input('parent_id') : null;

         try {
            DB::Begintransaction();
            if($request->input('parent_id') != $id){
                $category = $this->productRepository->update($id,[
                'name' => $request->input('name_category'),
                'slug' => Str::slug($request->input('name_category'), '-'),
                'description' => $request->input('description'),
                'parent_id' => $request->input('parent_id'),
                'is_active' => $request->input('is_active'),
                ]);
            }else{
                $category = $this->productRepository->update($id,[
                'name' => $request->input('name_category'),
                'slug' => Str::slug($request->input('name_category'), '-'),
                'description' => $request->input('description'),
                
                'is_active' => $request->input('is_active'),
                ]);
            }
        
           DB::commit();
           return Redirect::route('categories.index')->with('success', 'Update Category Successfully!');
            // return redirect()->route('catregories.index')->with('success', 'Update Category Successfully!');

        } catch (\Exception $e) {
          DB::rollBack();
          return Redirect::back()->withErrors(['update' => 'Something Wrong!'])->withInput();
        }
        
    }


    public function destroy($id)
    {
        $category = $this->productRepository->delete_($id);
    }
}
