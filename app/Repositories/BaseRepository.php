<?php
/**
 * Created by PhpStorm.
 * User: huzairuje
 * Date: 16/05/19
 * Time: 12:26
 */

namespace App\Repositories;


interface BaseRepository
{
    public function getAll();
    public function getId($id);
    public function store();
    public function update();
    public function delete($id);
}
