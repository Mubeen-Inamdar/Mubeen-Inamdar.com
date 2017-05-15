<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // GuzzleHttp.
        $this->app->singleton(\GuzzleHttp\Client::class, function ($app) {
            return new \GuzzleHttp\Client;
        });

        // Blog.
        $this->app->singleton(\App\Contracts\Blog\Repository::class, function ($app) {
            return new \App\Support\Blog\WordPress;
        });
    }
}
