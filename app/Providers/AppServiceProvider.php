<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Contracts\Routing\UrlGenerator;

class AppServiceProvider extends ServiceProvider
{
    // /**
    //  * Bootstrap any application services.
    //  *
    //  * @return void
    //  */
    // public function boot()
    // {
    //     Schema::defaultStringLength(191);
    // }

    // /**
    //  * Register any application services.
    //  *
    //  * @return void
    //  */
    // public function register()
    // {
    //     //
    // }


    /**
    * Bootstrap any application services.
    *
    * @return void
    */
    public function boot(UrlGenerator $url)
    {
        if(env('REDIRECT_HTTPS')){
            $url->formatScheme('https');
        }
    }

    /**
    * Register any application services.
    *
    * @return void
    */
    public function register()
    {
        if(env('REDIRECT_HTTPS')){
            $this->app['request']->server->set('HTTPS',true);
        }
    }

}
