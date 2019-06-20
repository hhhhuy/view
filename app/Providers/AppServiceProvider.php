<?php

namespace App\Providers;

use App\Repositories\impl\PostRepositoryImpl;
use App\Repositories\PostRepositoryInterface;
use App\Service\PostServiceImpl;
use App\Service\ServiceInterface;
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
        $this->app->singleton(PostRepositoryInterface::class,PostRepositoryImpl::class);
        $this->app->singleton(ServiceInterface::class,PostServiceImpl::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
