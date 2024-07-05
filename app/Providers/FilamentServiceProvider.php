<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Facades\Filament;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\File;
use Illuminate\Foundation\Vite;

class FilamentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Filament::serving(function () {
            // Register theme
            Filament::registerViteTheme('resources/css/filament.css');

        });
    }
}
