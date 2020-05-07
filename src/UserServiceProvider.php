<?php

namespace BacLV\Sample;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'user');
        if (!$this->app->routesAreCached()) {
            require __DIR__.'/routes.php';
        }
    }

    public function register()
    {
        //
    }
}
