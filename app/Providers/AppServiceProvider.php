<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Redis;

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
        if($this->app->environment('production')) {
            \URL::forceScheme('https');
        }

        if (config('queue.default') == 'redis') {
            Redis::enableEvents();
        }
    }
}
