<?php

namespace App\Http\Controllers\API;

use App\Library\ApiBaseResponse;
use App\Repositories\ArticleRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Exception;

class ArticleController extends Controller
{
    protected $articleRepository;
    protected $apiBaseResponse;

    public function __construct(ArticleRepository $articleRepository,
                                ApiBaseResponse $apiBaseResponse)
    {
        $this->articleRepository = $articleRepository;
        $this->apiBaseResponse = $apiBaseResponse;
    }

    public function index()
    {
        try {
            $data = $this->articleRepository->getAll();
            $response = $this->apiBaseResponse->listPaginate($data, 10);
            return response($response, Response::HTTP_OK);
        } catch (Exception $e) {
            $response = $this->apiBaseResponse->errorResponse($e);
            return response($response, Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getArticleFromId($id)
    {
        try {
            $data = $this->articleRepository->getId($id);
            $response = $this->apiBaseResponse->singleData($data, []);
            return response($response, Response::HTTP_OK);
        } catch (Exception $e) {
            $response = $this->apiBaseResponse->errorResponse($e);
            return response($response, Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
