<?php

namespace App\Repositories;

use App\Models\Brand;

class BrandRepository extends BaseRepository
{
    private $model;

    public function __construct(Brand $model)
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
