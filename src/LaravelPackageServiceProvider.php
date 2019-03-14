<?php

namespace Dimitricasierhowest\LaravelPackage;

use Illuminate\Support\ServiceProvider;

/**
 * More info: https://laravel.com/docs/5.8/packages
 * Class LaravelPackageServiceProvider
 * @package Dimitricasierhowest\LaravelPackage
 */
class LaravelPackageServiceProvider extends ServiceProvider
{

    private $paths = [];

    private function loadPaths(){
        $this->paths = [
            'config' => __DIR__ . '/../config/laravel-package.php',
            'migrations' => __DIR__ . '/../database/migrations/',
            'translations' => __DIR__ . '/../resources/lang/'
        ];
    }

    private function getPath($key){
        return isset($this->paths[$key]) ? $this->paths[$key] : null;
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadPaths();
        $this->registerPublishes();
        $this->loadRoutes();
    }

    private function loadRoutes(){
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
    }

    private function registerPublishes(){

        // -- config --
        $this->publishes([
            $this->getPath('config') => config_path('laravel-package.php')
        ], 'laravel-package-config');


        // -- migrations --
        $this->publishes([
            $this->getPath('migrations') => database_path('migrations')
        ], 'laravel-package-migrations');

        // -- translations --

        // -- register namespace
        $this->loadTranslationsFrom($this->getPath('translations'), 'laravel-package');

        // -- publish files
        $this->publishes([
            $this->getPath('translations') => resource_path('lang/vendor/laravel-package'),
        ], 'laravel-package-translations');

    }


}

