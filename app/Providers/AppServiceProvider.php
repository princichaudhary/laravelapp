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
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // resiger laravel 5 view generator
        if ($this->app->environment() == 'local') {
        $this->app->register('Andynoelker\Laravel5ViewGenerator\ViewGeneratorServiceProvider');
        }
    }
}
