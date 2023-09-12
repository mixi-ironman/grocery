<?php

namespace App\Repositories\Client;

use App\Models\User;

class UserRepository extends BaseRepository
{
    private $model;

    public function __construct(User $model)
    {
        $this->model = $model;
        parent::__construct($model);
    }
}
