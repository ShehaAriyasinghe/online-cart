<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\oopExample\exampleinterface;
use App\oopExample\childexample;
use App\Repositary\testinterface;
use App\Repositary\testimplementation;

use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(exampleinterface::class,childexample::class);
        $this->app->bind(testinterface::class,testimplementation::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultstringLength(191);
    }
}
