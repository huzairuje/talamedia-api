<?php
/**
 * Created by PhpStorm.
 * User: huzairuje
 * Date: 19/05/19
 * Time: 12:26
 */

namespace App\Service;

use App\Library\ApiBaseResponse;
use App\Repositories\AdsRepository;
use Illuminate\Http\Request;

class AdsService
{
    protected $adsRepository;
    protected $apiBaseResponse;

    public function __construct(AdsRepository $adsRepository,
                                ApiBaseResponse $apiBaseResponse)
    {
        $this->adsRepository = $adsRepository;
        $this->apiBaseResponse = $apiBaseResponse;
    }

    public function addNew(Request $request)
    {
        $data = $this->adsRepository->create($request);
        return $data;
    }

    public function getAll()
    {
        $data = $this->adsRepository->getAll();
        return $data;

    }

    public function getById($id)
    {
        $data = $this->adsRepository->getById($id);
        return $data;
    }

}
