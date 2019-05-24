<?php

namespace App\Http\Controllers\Api;

use App\Library\ApiBaseResponse;
use App\Http\Controllers\Controller;
use App\Repositories\AdsRepository;
use Illuminate\Http\Response;
use Exception;

class AdsController extends Controller
{
    protected $adsRepository;
    protected $apiBaseResponse;

    public function __construct(AdsRepository $adsRepository,
                                ApiBaseResponse $apiBaseResponse)
    {
        $this->adsRepository = $adsRepository;
        $this->apiBaseResponse = $apiBaseResponse;
    }

    public function index()
    {
        try {
            $data = $this->adsRepository->getAll();
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
            $data = $this->adsRepository->getById($id);
            $response = $this->apiBaseResponse->singleData($data, []);
            return response($response, Response::HTTP_OK);
        } catch (Exception $e) {
            $response = $this->apiBaseResponse->errorResponse($e);
            return response($response, Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
