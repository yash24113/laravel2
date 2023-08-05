<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Schema\Builder;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Builder::defaultStringLength(150);
    }
}
