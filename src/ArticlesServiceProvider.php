<?php

namespace Sm\Articles;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class ArticlesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // $this->loadHelpers();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $this->loadRoutesFrom(__DIR__ . '/routes/wep.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'articles');

        $this->publishes([__DIR__.'\public' => public_path('/')], 'public');
        
        // Views
        $this->publishes([__DIR__.'\views' => base_path('resources/views')],'resources');

        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
    } 

}
