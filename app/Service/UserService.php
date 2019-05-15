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

    public function getAll()
    {
        return User::all();
    }

    public function getId($id)
    {
        return User::findOrFail($id);
    }

    public function store()
    {
        return User::firstOrCreate();
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        return User::destroy($id);
    }
}
