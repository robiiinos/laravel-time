# Laravel Time

[![Latest Version on Packagist](https://img.shields.io/packagist/v/robiiinos/laravel-time.svg?style=flat-square)](https://packagist.org/packages/robiiinos/laravel-time)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/robiiinos/laravel-time/Tests?label=tests)](https://github.com/robiiinos/laravel-time/actions?query=workflow%3ATests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/robiiinos/laravel-time.svg?style=flat-square)](https://packagist.org/packages/robiiinos/laravel-time)

Register a `/time` endpoint to your Laravel API.

Use case:
- Endpoint for monitoring.
- Synchronize other applications with your server (for timing security in trading applications, ...).

## Installation

You can install the package via composer:

```bash
composer require robiiinos/laravel-time
```

You can publish the config file with:

```bash
php artisan vendor:publish --provider="Robiiinos\LaravelTime\LaravelTimeServiceProvider" --tag="config"
```

This is the content of the config file:

```php
return [

    /*
    |--------------------------------------------------------------------------
    | Laravel Time Route Prefix
    |--------------------------------------------------------------------------
    |
    | This prefix will be assigned to every Laravel Time route, giving you
    | the chance to set your own prefix or change the existing prefix.
    |
    */

    'prefix' => 'api',

    /*
    |--------------------------------------------------------------------------
    | Laravel Time Route Middleware
    |--------------------------------------------------------------------------
    |
    | These middleware will be assigned to every Laravel Time route, giving you
    | the chance to add your own middleware to this list or change any of
    | the existing middleware. Or, you can simply stick with this list.
    |
    */

    'middleware' => [
        'api',
    ],

];
```

## Usage

This package takes advantage of Laravel [Package Discovery](https://laravel.com/docs/8.x/packages#package-discovery), therefore there is no configuration to be made our your application.

## Testing

``` bash
composer test
```

## Credits

- [robiiinos](https://github.com/robiiinos)
- [All Contributors](../../contributors)

## License

MIT License. Please see [LICENSE](LICENSE.md) for more information.
