<?php

namespace App\Http\Controllers\API;

use App\Library\ApiBaseResponse;
use App\Repositories\UserRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Exception;

class UserController extends Controller
{
    protected $userRepository;
    protected $apiBaseResponse;

    public function __construct(ApiBaseResponse $apiBaseResponse,
                                UserRepository $userRepository)
    {
        $this->apiBaseResponse = $apiBaseResponse;
        $this->userRepository = $userRepository;
    }

    public function getUserById($id)
    {
        try {
            $data = $this->userRepository->getUserById($id);
            $response = $this->apiBaseResponse->singleData($data, []);
            return response($response, Response::HTTP_OK);
        } catch (Exception $e) {
            $response = $this->apiBaseResponse->errorResponse($e);
            return response($response, Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function index()
    {
        try {
            $data = $this->userRepository->getAllUser();
            $response = $this->apiBaseResponse->listPaginate($data, 10);
            return response($response, Response::HTTP_OK);
        } catch (Exception $e) {
            $response = $this->apiBaseResponse->errorResponse($e);
            return response($response, Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

}
