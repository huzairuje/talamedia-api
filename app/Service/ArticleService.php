<?php
/**
 * Created by PhpStorm.
 * User: huzairuje
 * Date: 16/05/19
 * Time: 3:17
 */

namespace App\Service;

use App\Repositories\ArticleRepository;
use Illuminate\Http\Request;

class ArticleService
{
    protected $articleRepository;

    public function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function addNew(Request $request)
    {
        $data = $this->articleRepository->create($request);
        return $data;
    }

    public function getAll()
    {
        $data = $this->articleRepository->getAll();
        return $data;
    }

    public function getById($id)
    {
        $data = $this->articleRepository->getById($id);
        return $data;
    }

}
