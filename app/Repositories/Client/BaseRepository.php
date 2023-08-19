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
        $model = $this->getById($id);
        $model->update($attribute);
        return $model;
    }

    public function delete($id)
    {
        return $this->model->where('id',$id)
                           ->delete();
    }
}

// Tóm lại, cách sử dụng Product:: thường dùng để thực 
// hiện các truy vấn cơ sở dữ liệu hoặc tương tác với 
// dữ liệu có sẵn. Còn cách tạo instance của model bằng
//  new Product() thường được sử dụng để tạo mới bản ghi
//   và thao tác với dữ liệu trước khi lưu vào cơ sở dữ liệu.