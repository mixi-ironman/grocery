<?php

namespace App\Repositories;

use App\Models\Order;

class OrderRepository extends BaseRepository
{

    public function __construct(readonly Order $model)
    {
        parent::__construct($model);
    }

    public function All()
    {
        return $this->model->orderByDesc('created_at')->paginate(5);
        // return $this->model->paginate(5);
        // return $this->model->getAll();
    }
}
