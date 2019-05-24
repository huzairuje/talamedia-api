<?php


namespace App\Repositories;


interface BaseRepository
{
    public function create();
    public function getAll();
    public function getById($id);
    public function update();
    public function delete();
}
