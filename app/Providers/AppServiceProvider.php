<?php

namespace App\Providers;

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
        //For any page with de sidebar, we load a view with the archives variable, then in the model we specify what the variable does
        view()->composer('layouts.sidebar', function($view){

            $view->with('archives', \App\Post::archives());

        });

        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
