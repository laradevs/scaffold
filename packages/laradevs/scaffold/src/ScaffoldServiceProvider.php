<?php

namespace Laradevs\Scaffold;

use Illuminate\Support\ServiceProvider;
use Laradevs\Scaffold\Controllers\ScaffoldMainController;

class ScaffoldServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
      
       include __DIR__.'/publishes.php';

         //controllers
        $this->app->make(ScaffoldMainController::class);

        //views
        $this->loadViewsFrom(__DIR__.'/views', 'scaffold');

       
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config/scaffold.php', 'scaffold'
        );
        include __DIR__.'/routes.php';
    }
}
