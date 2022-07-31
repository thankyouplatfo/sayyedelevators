<?php

namespace App\Providers;

use App\Http\ViewCompoaeres\MediaCompoaer;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view::composer('partials.media',MediaCompoaer::class);
        //
        Blade::if('admin', function () {
            return auth()->check() && auth()->user()->isAdmin();
        });
        //
        //Paginator::useBootstrap();
    }
}
