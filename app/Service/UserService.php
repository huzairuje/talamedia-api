<?php
/**
 * Created by PhpStorm.
 * User: huzairuje
 * Date: 16/05/19
 * Time: 3:16
 */

namespace App\Service;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function addNew(Request $request)
    {
        $data = $this->userRepository->create($request);
        return $data;
    }

    public function getUserById($id)
    {
        $data = $this->userRepository->getById($id);
        return $data;
    }

    public function getAllUser()
    {
        $data = $this->userRepository->getAll();
        return $data;
    }

}
