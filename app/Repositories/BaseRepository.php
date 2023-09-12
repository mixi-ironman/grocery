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

    // get list 
    public function getAll()
    {
        return $this->model->all();
    }

    public function getPaginate()
    {
        return $this->model->orderByDesc('created_at')->paginate(5)->withQueryString();
    }

    public function create($attribute = [])
    {
        // dd($attribute);
        return $this->model->create($attribute);
    }

    public function update($id, $attribute = [])
    {
        $model = $this->getById($id);
        $model->update($attribute);
        // dd($model);
        return $model;
    }

    public function delete($id)
    {
        return $this->model->where('id',$id)
                           ->delete();
    }
}