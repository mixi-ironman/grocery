<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository extends BaseRepository
{
    private $model;

    public function __construct(Product $model)
    {
        $this->model = $model;
        parent::__construct($model);
    }

    public function getProducts()
    {
        return $this->model->orderByDesc('created_at')->paginate(5);
        // return $this->model->paginate(5);
        // return $this->model->all();


    }
}
