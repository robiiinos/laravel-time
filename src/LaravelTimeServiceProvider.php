<?php

namespace Robiiinos\LaravelTime;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class LaravelTimeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/laravel-time.php' => config_path('laravel-time.php'),
            ], 'laravel-time-config');
        }

        $this->registerRoutes();
    }

    /**
     * Register the package routes.
     *
     * @return void
     */
    private function registerRoutes(): void
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../routes/api.php');
        });
    }

    /**
     * Get the Laravel Time route group configuration array.
     *
     * @return array
     */
    private function routeConfiguration(): array
    {
        return [
            'prefix' => config('laravel-time.prefix'),
            'middleware' => config('laravel-time.middleware'),
        ];
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/laravel-time.php',
            'laravel-time'
        );
    }
}
