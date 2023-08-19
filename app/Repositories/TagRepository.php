<?php

namespace App\Repositories;

use App\Models\Tag;

class TagRepository extends BaseRepository
{
    private $model;

    public function __construct(Tag $model)
    {
        $this->model = $model;
        parent::__construct($model);
    }

    public function All()
    {
        return $this->model->orderByDesc('created_at')->paginate(5);
        // return $this->model->paginate(5);
        // return $this->model->getAll();
    }
}
