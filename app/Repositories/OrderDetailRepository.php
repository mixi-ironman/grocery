<?php

namespace App\Repositories;

use App\Models\OrderDetail;


class OrderDetailRepository extends BaseRepository
{
    private $model;

    public function __construct( OrderDetail $model)
    {
        $this->model = $model;
        parent::__construct($this->model);
    }

    // public function All()
    // {
    //     return $this->model->orderByDesc('created_at')->paginate(5);
    //     // return $this->model->paginate(5);
    //     // return $this->model->getAll();
    // }

    public function getOrderDetail($id)
    {
        return $this->model->where('order_id',$id)->get();
        // return $this->model->paginate(5);
        // return $this->model->getAll();
    }
}
