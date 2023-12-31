<?php

namespace App\Repositories;

class BaseRepository
{
    private $model;
    public function __construct($model)
    {
        $this->model = $model;
    }

    public function getById($id)
    {
        return $this->model->find($id);
    }
}