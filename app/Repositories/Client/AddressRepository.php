<?php

namespace App\Repositories\Client;

use App\Models\Address;

class AddressRepository extends BaseRepository
{
    private $model;

    public function __construct(Address $model)
    {
        $this->model = $model;
        parent::__construct($model);
    }
}
