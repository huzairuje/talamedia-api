<?php

namespace App\Http\Controllers\API;

use App\Library\ApiBaseResponse;
use App\Service\UserService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Exception;

class UserController extends Controller
{
    protected $userService;
    protected $apiBaseResponse;

    public function __construct(UserService $userService, ApiBaseResponse $apiBaseResponse)
    {
        $this->userService = $userService;
        $this->apiBaseResponse = $apiBaseResponse;
    }

    public function getUserById($id)
    {
        try {
            $data = $this->userService->getUserById($id);
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
            $data = $this->userService->getAllUser();
            $response = $this->apiBaseResponse->listPaginate($data, 10);
            return response($response, Response::HTTP_OK);
        } catch (Exception $e) {
            $response = $this->apiBaseResponse->errorResponse($e);
            return response($response, Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

}
