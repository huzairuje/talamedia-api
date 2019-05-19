<?php

namespace App\Http\Controllers\Api;

use App\Library\ApiBaseResponse;
use App\Service\AdsService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Exception;

class AdsController extends Controller
{
    protected $adsService;
    protected $adsRepository;
    protected $apiBaseResponse;

    public function __construct(AdsService $adsService,
                                ApiBaseResponse $apiBaseResponse)
    {
        $this->adsService = $adsService;
        $this->apiBaseResponse = $apiBaseResponse;
    }

    public function index()
    {
        try {
            $data = $this->adsService->getAll();
            $response = $this->apiBaseResponse->listPaginate($data, 10);
            return response($response, Response::HTTP_OK);
        } catch (Exception $e) {
            $response = $this->apiBaseResponse->errorResponse($e);
            return response($response, Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getAdsById($id)
    {
        try {
            $data = $this->adsService->getById($id);
            $response = $this->apiBaseResponse->singleData($data, []);
            return response($response, Response::HTTP_OK);
        } catch (Exception $e) {
            $response = $this->apiBaseResponse->errorResponse($e);
            return response($response, Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
