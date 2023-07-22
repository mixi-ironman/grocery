<?php

namespace App\Repositories;

use App\Models\Slider;

class SliderRepository extends BaseRepository
{
    private $model;

    public function __construct(Slider $model)
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
