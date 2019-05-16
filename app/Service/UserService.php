<?php
/**
 * Created by PhpStorm.
 * User: huzairuje
 * Date: 16/05/19
 * Time: 3:16
 */

namespace App\Service;

use App\Models\User;
use App\Repositories\UserRepository;

class UserService implements UserRepository
{
    protected $userModel;

    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    public function getAll()
    {
        $data = $this->userModel;
        return $data;
    }

    public function getId($id)
    {
        $data = $this->userModel->findOrFail($id);
        return $data;
    }

    public function store()
    {
        $data = $this->userModel->save();
        return $data;
    }

    public function update()
    {
        $data = $this->userModel->update();
        return $data;
    }

    public function delete($id)
    {
        $data = $this->userModel->destroy($id);
        return $data;
    }
}
