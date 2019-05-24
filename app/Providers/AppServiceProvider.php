<?php

namespace App\Providers;

use App\Repositories\ArticleRepository;
use App\Repositories\Impl\ArticleImplementRepository;
use App\Repositories\Impl\UserImplementRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //user interface and implements
        $this->app->bind(UserRepository::class,
                        UserImplementRepository::class);

        //Article Interface Repository and repository
        $this->app->bind(ArticleRepository::class,
                        ArticleImplementRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //TODO
    }
}
