<?php


namespace App\Repositories;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserRepository
{
    protected $userModel;
    
    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    public function getId($id)
    {
        $data = $this->userModel->find($id);
        return $data;
    }

    public function getAll()
    {
        $data = $this->userModel;
        return $data;
    }

    public function create(Request $request)
    {
        DB::beginTransaction();
        $data = $this->userModel;
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
        $data = $this->userModel;
        $data->name = $request->name;
        $data->slug = $request->slug;
        $data->image_banner_url = $request->image_banner_url;
        $data->update();
        DB::commit();
        return $data;
    }

    public function getById($id)
    {
        $data = $this->userModel->find($id);
        return $data;
    }

    public function delete($id)
    {
        DB::beginTransaction();
        $data = $this->userModel->destroy($id);
        DB::commit();
        return $data;
    }

}
