<?php

namespace App\Repositories;

use App\Models\Coupon;

class CouponRepository extends BaseRepository
{
    private $model;

    public function __construct(Coupon $model)
    {
        $this->model = $model;
        parent::__construct($model);
    }

    public function All()
    {
        return $this->model->orderByDesc('created_at')->paginate(5);
        // return $this->model->paginate(5);
    }
}
