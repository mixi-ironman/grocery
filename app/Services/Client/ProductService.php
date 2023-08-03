<?php

namespace App\Services\Client;

use App\Repositories\Client\ProductRepository;
use Illuminate\Support\Str;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ProductService
{
    private $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function show($id)
    {
            return $this->productRepository->getDetailProduct($id);
    }

    //get all category
    public function getProducts()
    {
        return $this->productRepository->getProducts();
    }

    //get product theo id
    public function getProductById($id)
    {
        return $this->productRepository->getById($id);
    }

    public function getAllProducts()
    {
        return $this->productRepository->getAll();
    }

    //load product
    public function loadProduct($page = null)
    {
        return $this->productRepository->loadProducts($page);
    }
}