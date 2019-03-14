<?php

namespace Dimitricasierhowest\LaravelPackage;

use Illuminate\Support\ServiceProvider;

class LaravelPackageProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        dd('oink');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
