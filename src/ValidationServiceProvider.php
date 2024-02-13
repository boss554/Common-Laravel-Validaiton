<?php

namespace Kody\Validation;

use Illuminate\Support\ServiceProvider;

class ValidationServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->mergeConfigFrom(__DIR__ . '/config/custom-validation.php', 'validation');

        $this->publishes([
            __DIR__ . '/config/custom-validation.php' => config_path('custom-validation.php')
        ]);
    }

    /**
     * Register services.
     */
    public function register(): void
    {
    }
}
