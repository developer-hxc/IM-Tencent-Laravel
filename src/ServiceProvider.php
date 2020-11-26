<?php
namespace HXC\IM;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * @var bool
     */
    protected $defer = true;

    /**
     * Boot the provider.
     */
    public function boot()
    {
        
    }

    /**
     * Register the provider.
     */
    public function register()
    {
        $this->app->singleton(IMController::class,function($app){
            return new IMController();
        });
        $this->app->alias(IMController::class,'HXCIM');
    
    }

    /**
     * @return array
     */
    public function provides()
    {
        return [IMController::class,'HXCIM'];
    }
}