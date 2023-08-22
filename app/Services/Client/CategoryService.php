<?php

namespace App\Services\Client;

use App\Repositories\Client\ProductRepository;
use Illuminate\Support\Str;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class CategoryService
{

    public function __construct(readonly private ProductRepository $productRepository)
    {
      
    } 
}
