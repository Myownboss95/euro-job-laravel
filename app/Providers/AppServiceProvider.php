<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
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
        Request::macro('isAdmin', fn () => request()->getHost() == admin_domain());
        Request::macro('isUser', fn () => request()->getHost() == user_domain());
        Request::macro('isFront', fn () => request()->getHost() == front_domain());

        if (request()->isAdmin()) {
            config(['fortify.guard' => 'admin']);
            config(['fortify.domain' => admin_domain()]);
        }

        if (request()->isUser() || request()->isFront()) {
            config(['fortify.guard' => 'user']);
            config(['fortify.domain' => user_domain()]);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
    }
}
