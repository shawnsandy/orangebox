<?php

namespace ShawnSandy\Orangebox;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;

/**
* Class Provider
 * @package ShawnSandy\OrangeBox
 */
class OrangeboxThemesProvider extends ServiceProvider
{



    /**
    * Perform post-registration booting of services.
                 *
                 * @return void
                 */
    public function boot()
    {





        /**
        * Package views
                                 */
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'orangebox');
        $this->publishes(
            [
                __DIR__ . '/resources/views' => resource_path('views/vendor/orangebox'),
            ], 'orangebox-views'
        );




        /**
        * Package assets
                                 */
        $this->publishes(
            [
                __DIR__.'/resources/assets/js/' => public_path('assets/orangebox/js/'),
                __DIR__.'/public/assets/' => public_path('assets/'),
                __DIR__.'/public/' => public_path('orangebox'),
            ], 'orangebox-assets'
        );





        /**
        * Package resources to resources
                                 */
        $this->publishes(
            [
                __DIR__.'/resources/assets/' => resource_path('assets/orangebox/'),
            ], 'orangebox-resources'
        );




        /**
        * Package config
                                 */
        $this->publishes(
            [__DIR__ . '/config/config.php' => config_path('orangebox.php')],
            'orangebox-config'
        );

        $this->publishes([
                    __DIR__ . '/migrations/' => database_path('migrations')
                ], 'orangebox-migrations');


        $this->loadMigrationsFrom(__DIR__ . '/migrations');
        $this->app->bind(
        'Orangebox', function () {
            return new Orangebox();
        }
        );

        $this->registerFactoriesPath(__DIR__.'/factories');

        $views = resource_path(
        "views/orangebox"
        );

        $this->loadViewsFrom($views, 'orangebox');
    }




    /**
    * Register factories.
            *
            * @param  string  $path
            * @return void
            */
    protected function registerFactoriesPath($path)
    {
        $this->app->make(Factory::class)->load($path);
    }


    public function loadProviders()
    {

        if (!$this->app->runningInConsole()) :
                                    include_once __DIR__ . '/Helpers/helper.php';
        endif;
    }




    /**
    * Register any package services.
                 *
                 * @return void
                 */
    public function register()
    {

        $this->mergeConfigFrom(
            __DIR__ . '/config/config.php', 'orangebox'
        );

        $this->app->bind(
        'Orangebox', function () {
            return new Orangebox();
        }
        );
    }
}
