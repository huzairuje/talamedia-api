<?php
/**
 * Created by PhpStorm.
 * User: huzairuje
 * Date: 16/05/19
 * Time: 3:17
 */

namespace App\Service;

use App\Models\Article;
use App\Repositories\ArticleRepository;

class ArticleService implements ArticleRepository
{
    protected $articleModel;
    public function __construct(Article $articleModel)
    {
        $this->articleModel = $articleModel;
    }

    public function getAll()
    {
        $data = $this->articleModel;
        return $data;
    }

    public function getId($id)
    {
        $data = $this->articleModel->find($id);
        return $data;
    }

    public function store()
    {
        $data = $this->articleModel->save();
        return $data;
    }

    public function delete($id)
    {
        $data = $this->articleModel->destroy($id);
        return $data;
    }

    public function update()
    {
        $data = $this->articleModel->update();
        return $data;
    }
}
