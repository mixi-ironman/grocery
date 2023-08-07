<?php

namespace App\Repositories\Client;

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
        // return $this->model->orderByDesc('created_at')->paginate(5);
        // return $this->model->paginate(5);
        return $this->model->orderByDesc('id')->limit(10)->with(['category'])->get();
    }
    
    // load thêm sản phẩm
    // public function loadProducts($page = null)
    // {
    //     return $this->model->orderByDesc('id')
    //                         ->when($page != null , function($query) use ($page){
    //                             $query->offset($page * 10);
    //                         })
    //                         ->limit(10)
    //                         ->get();
    // }

    public function loadProducts($page = null)
    {
        $query = $this->model->orderByDesc('id');

        if ($page !== null) {
            $query->skip($page * 10);
        }

        return $query->limit(10)->get();
    }


    public function getDetailProduct($id)
    {
       return $this->model->where('id', $id)->where('is_active', 1)->firstOrFail();
    }

    //lấy ra sản phẩm liên quan
    // public function relatedProducts( $id=null,)
    // {
    //    return $this->model->where('id','!=', $id)
    //                         ->where('is_active', 1)
    //                         ->orderByDesc('id')
    //                         ->limit(8)
    //                         ->get();
    // }
}
