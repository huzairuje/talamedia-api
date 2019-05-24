<?php


namespace App\Repositories\Impl;

use App\Models\Ads;
use App\Repositories\AdsRepository;
use Illuminate\Support\Facades\DB;

class AdsImplementRepository implements AdsRepository
{
    protected $model;

    public function __construct(Ads $model)
    {
        $this->model = $model;
    }

    public function create()
    {
        $data = $this->model;
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
