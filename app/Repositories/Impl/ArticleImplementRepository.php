<?php


namespace App\Repositories\Impl;

use App\Models\Article;
use App\Repositories\ArticleRepository;
use Illuminate\Support\Facades\DB;

class ArticleImplementRepository implements ArticleRepository
{
    protected $model;

    public function __construct(Article $model)
    {
        $this->model = $model;
    }

    public function create()
    {
        DB::beginTransaction();
        $data = $this->model;
        $data->title;
        DB::commit();
        return $data;
    }

    public function getAll()
    {
        $data = $this->model;
        return $data;
    }

    public function getById($id)
    {
        $data = $this->model->find($id);
        return $data;
    }

    public function update()
    {
        DB::beginTransaction();
        $data = $this->model->find();

        DB::commit();
        return $data;
    }

    public function delete()
    {
        DB::beginTransaction();
        $data = $this->model->find();
        $data->delete();
        DB::commit();

        return $data;
    }
}
