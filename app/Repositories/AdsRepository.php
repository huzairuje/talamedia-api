<?php


namespace App\Repositories;

use App\Models\Ads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdsRepository
{
    protected $adsModel;

    public function __construct(Ads $adsModel)
    {
        $this->adsModel = $adsModel;
    }

    public function getId($id)
    {
        $data = $this->adsModel->find($id);
        return $data;
    }

    public function getAll()
    {
        $data = $this->adsModel;
        return $data;
    }

    public function create(Request $request)
    {
        DB::beginTransaction();
        $data = $this->adsModel;
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
        $data = $this->adsModel;
        $data->name = $request->name;
        $data->slug = $request->slug;
        $data->image_banner_url = $request->image_banner_url;
        $data->update();
        DB::commit();
        return $data;
    }

    public function getById($id)
    {
        $data = $this->adsModel->find($id);
        return $data;
    }

    public function delete($id)
    {
        DB::beginTransaction();
        $data = $this->adsModel->destroy($id);
        DB::commit();
        return $data;
    }

}
