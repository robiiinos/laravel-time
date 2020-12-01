<?php

namespace Robiiinos\LaravelTime\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Robiiinos\LaravelTime\LaravelTimeServiceProvider;

class FeatureTestCase extends Orchestra
{
    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return array
     */
    protected function getPackageProviders($app): array
    {
        return [
            LaravelTimeServiceProvider::class,
        ];
    }
}
