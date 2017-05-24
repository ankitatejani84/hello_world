<?php
namespace ankitatejani84\hello_world;

use Illuminate\Support\ServiceProvider;

class hello_worldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
       include __DIR__.'/routes.php';

        $this->loadViewsFrom(__DIR__.'/views','hello_world');
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app['hello_world']=$this->app->share(function ($app){
            return new hello_world;
        });
    }
}