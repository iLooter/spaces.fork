<?php

namespace App\Providers;

use Validator;
use Illuminate\Support\ServiceProvider;
use App\Validation\PasscheckRule;

class ValidationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend(PassCheckRule::NAME, PassCheckRule::class.'@validate');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
