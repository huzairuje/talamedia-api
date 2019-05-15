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

    public function getAll()
    {
        return Article::all();
    }

    public function getId($id)
    {
        return Article::findOrFail($id);
    }

    public function store()
    {
        return Article::save();
    }

    public function delete($id)
    {
        return Article::destroy($id);
    }

    public function update()
    {
        return Article::update();
    }
}
