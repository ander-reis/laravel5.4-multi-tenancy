<?php

namespace App\Providers;

use App\Routing\Redirector;
use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * captura query ao ser executado
         */
        \DB::listen(function (QueryExecuted $query){
            \Log::info($query->sql);
            \Log::info($query->bindings);
        });

        \Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->extend('redirect', function($redirectorOriginal, $app){
            $redirector = new Redirector($app['url']);
            if(isset($app['session.store'])){
                $redirector->setSession($app['session.store']);
            }
            return $redirector;
        });
    }
}
