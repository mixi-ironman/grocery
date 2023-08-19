<?php

namespace App\Services;

use App\Repositories\TagRepository;
use Illuminate\Support\Str;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Exceptions\CommonException;
use Illuminate\Http\Request;
use App\Models\Tag;


class TagService
{

    public function __construct(readonly TagRepository $tagRepository)
    {

    }

    public function store(Request $request)
    {
        $tagName = $request->input('tagName');
        try {
            DB::beginTransaction();
            if ($request->ajax()) {
                // Kiểm tra xem thẻ đã tồn tại chưa
                $existingTag = Tag::where('name', $tagName)->first();
                if (!$existingTag) 
                {
                    $tag = new Tag();
                    $tag->name = $tagName;
                    $tag->save();
                    $tagId = $tag->id; // Lấy ID của thẻ mới
                }else {
                    $tagId = $existingTag->id; // Sử dụng ID của thẻ đã tồn tại
                }
            }
    
            DB::commit();
            $tagId = $tag->id; 
            return response()->json([
                'success' => true,
                'tagId' => $tagId // Lấy ID của thẻ mới
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            throw new CommonException('Something wrong');
        }
    }
    

    public function update($request, $id)
    {
       
        try {
            DB::beginTransaction();

            //handle update is_active
            if ($request->ajax()) {
               
            }
            DB::commit();

             return Redirect::route('categories.index')->with('success', 'Update Category Successfully!');
            //  return redirect()->route('categories.index')->with('success', 'Created Category Successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors(['update' => 'Something Wrong!'])->withInput();
        }
    }



    public function destroy($id)
    {
        // $category = $this->categoryRepository->delete_($id);
    }

}
