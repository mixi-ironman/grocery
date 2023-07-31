<?php

namespace App\Services;

use Illuminate\Support\Str;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Services\ProductService;
use App\Repositories\OrderRepository;
use App\Repositories\OrderDetailRepository;

class OrderDetailService
{
    

    public function __construct(readonly OrderDetailRepository $orderDetailRepository,readonly OrderRepository $orderRepository)
    {

    }

    public function getOrderDetail()
    {
        return $this->orderDetailRepository->getAll();
    }

    public function getOrder()
    {
        return $this->orderRepository->getAll();
    }

    public function getOrderById($id)
    {
        return $this->orderRepository->getById($id);
    }

    public function getOrderDetailById($id)
    {
        return $this->orderDetailRepository->getOrderDetail($id);
    }


}
