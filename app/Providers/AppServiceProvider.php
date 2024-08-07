<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use App\Validators;
// use Validator;
use Illuminate\Support\Facades\Validator;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Validator::extend('recaptcha','App\\Validators\\ReCaptcha@validate');
    }
}
