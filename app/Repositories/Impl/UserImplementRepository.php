<?php


namespace App\Repositories\Impl;

use App\Models\User;
use App\Repositories\UserRepository;

class UserImplementRepository implements UserRepository
{
    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    function getAllUser()
    {
        $data = $this->model;
        return $data;
    }

    function getUserById($id)
    {
        $data = $this->model->find($id);
        return $data;
    }
}
