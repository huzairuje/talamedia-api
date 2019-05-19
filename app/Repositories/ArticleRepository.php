<?php


namespace App\Repositories;


use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleRepository
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

    public function create(Request $request)
    {
        DB::beginTransaction();
        $data = $this->articleModel;
        $data->name = $request->name;
        $data->slug = $request->slug;
        $data->image_banner_url = $request->image_banner_url;
        $data->save();
        DB::commit();
        return $data;
    }

    public function update(Request $request)
    {
        DB::beginTransaction();
        $data = $this->articleModel;
        $data->name = $request->name;
        $data->slug = $request->slug;
        $data->image_banner_url = $request->image_banner_url;
        $data->update();
        DB::commit();
        return $data;
    }

    public function getById($id)
    {
        $data = $this->articleModel->find($id);
        return $data;
    }

    public function delete($id)
    {
        DB::beginTransaction();
        $data = $this->articleModel->destroy($id);
        DB::commit();
        return $data;
    }

}
