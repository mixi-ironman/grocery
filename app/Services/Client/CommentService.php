<?php

namespace App\Services\Client;

use Illuminate\Support\Str;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

use App\Repositories\Client\CommentRepository;

class CommentService
{

    public function __construct(readonly CommentRepository $commentRepository)
    {
    }

    public function store($request)
    {
         try {
            DB::beginTransaction();
            if(Auth::check())
            {
                $product_id = $request->product_id;
            
                $comment = $this->commentRepository->create([
                    'name' => $request->name,
                    'content' => $request->content,
                    'rating' => $request->selectedIndex,
                    'commentable_type' => 'product',
                    'commentable_id' => $request->product_id,
                ]);
                DB::commit();
                return response()->json(['message' => 'Bình luận đã được lưu!', 'code' => '200'], 200);
            }else{
                return response()->json(['message' => 'Bình luận chưa được lưu!', 'code' => '500']);
            }

        } catch (\Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors(['create' => 'Something Wrong!'])->withInput();
        }
    }

    public function show($id)
    {
           $comments = $this->commentRepository->getAllCommentProduct($id);
           return $comments;
    }
}
