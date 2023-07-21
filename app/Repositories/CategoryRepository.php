<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository extends BaseRepository
{
    private $model;

    public function __construct(Category $model)
    {
        $this->model = $model;
        parent::__construct($model);
    }

    public function getCategories()
    {
        return $this->model->orderByDesc('created_at')->paginate(5);
        // return $this->model->paginate(5);
        // return $this->model->all();


    }

    public function getParent()
    {
        // dd($data);
        return $this->model->where('parent_id',0)->get();
    }

    public function delete_($id)
    {
        $category = $this->model->find($id);
        if ($category) {
            if ($category->parent_id == 0) {
                // Xóa danh mục cha và các danh mục con
                $this->model->where('id', $id)->orWhere('parent_id', $id)->delete();
            } else {
                // Xóa chỉ danh mục hiện tại (nếu không phải là danh mục cha)
                $this->model->where('id', $id)->delete();
            }

            return true; // hoặc bạn có thể trả về thông báo xóa thành công nếu cần
        }

        return false; // hoặc bạn có thể trả về thông báo không tìm thấy danh mục nếu cần
    }

    

    
}
