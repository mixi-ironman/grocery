<?php

namespace App\Repositories\Client;

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

    

    public function create($attribute = [])
    {
        // dd($attribute);
        return $this->model->create($attribute);
    }

    public function update($id, $attribute = [])
    {
        return $this->model->where('id',$id)
                           ->update($attribute);
    }

    public function delete($id)
    {
        return $this->model->where('id',$id)
                           ->delete();
    }
}