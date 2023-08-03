<?php

namespace App\Repositories\Client;

use App\Models\Comment;

class CommentRepository extends BaseRepository
{
    private $model;

    public function __construct(Comment $model)
    {
        $this->model = $model;
        parent::__construct($model);
    }

    public function getAllCommentProduct($id)
    {
        // return $this->model->orderByDesc('created_at')->paginate(5);
        // return $this->model->paginate(5);
        return $this->model->where('commentable_id',$id)->where('commentable_type','product')->orderByDesc('created_at')->get();
    }

  
}
