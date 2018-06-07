<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       /*DB::listen(function ($query) {
            echo '<pre>';
            dump([
                $query->sql,
                //$query->bindings,
                //$query->time
            ]);
            echo '</pre>';
        });*/
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
