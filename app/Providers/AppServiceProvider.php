<?php

namespace App\Providers;

use App\Http\Repositories\Impl\UserEloquentRepository;
use App\Http\Repositories\UserRepositoryInterface;
use App\Http\Service\Impl\UserServiceImpl;
use App\Http\Service\UserServiceInterface;
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
        $this->app->singleton(
            UserRepositoryInterface::class,
            UserEloquentRepository::class
        );
        $this->app->singleton(

            UserServiceInterface::class,
            UserServiceImpl::class
        );
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
