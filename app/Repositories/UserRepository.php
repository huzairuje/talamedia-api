<?php
/**
 * Created by PhpStorm.
 * User: huzairuje
 * Date: 16/05/19
 * Time: 3:14
 */

namespace App\Repositories;


interface UserRepository extends BaseRepository
{
    public function getAll();
//    public function getId($id);
    public function store();
    public function update();
    public function delete($id);
}
