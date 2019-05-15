<?php
/**
 * Created by PhpStorm.
 * User: huzairuje
 * Date: 16/05/19
 * Time: 6:36
 */

namespace App\Providers;

use App\Repositories\ArticleRepository;
use App\Repositories\BaseRepository;
use App\Repositories\UserRepository;
use App\Service\ArticleService;
use App\Service\UserService;
use Illuminate\Support\ServiceProvider;

class ApiServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //TODO
    }

    public function register()
    {
        $this->app->bind(
            ArticleRepository::class,
            ArticleService::class
        );

        $this->app->bind(
          UserRepository::class,
          UserService::class
        );
    }

}
