<?php

namespace App\Providers;

use App\Services\AppService1;
use Facade\FlareClient\Http\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

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
        $this->app->bind(MainService::class, function($app){
            return new AppService1();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        if ($this->app->environment('production')) {
            # code...
            URL::forceScheme('https');
        }
    }
}
