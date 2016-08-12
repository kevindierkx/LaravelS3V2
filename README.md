# Laravel 5.x Aws-S3-v2 SDK driver

This package adds support for the Aws-S3-v2 SDK. Some S3 compatible providers don't support the newest version of the SDK.

## Installation

To install this package you will need:

- Laravel 5+

You can modify your composer.json file and run composer update to include the latest version of the package in your project:

```json
"require": {
    "kevindierkx/laravel-s3v2": "1.0.*"
}
```

Or you can run the composer require command from your terminal:

```php
composer require kevindierkx/laravel-s3v2:1.0.*
```

Once the package is installed you will need to open ```config/app.php``` and register the required service provider:

```php
'providers' => [
    'Kevindierkx\LaravelS3v2\S3DriverServiceProvider'
]
```

## Usage

Use the ```s3-v2``` driver in your S3 configuration. With the ```base_url``` parameter you can specify a different endpoint.

```PHP
's3-connection-name' => [
    'driver'   => 's3-v2',
    'key'      => env('S3_KEY'),
    'secret'   => env('S3_SECRET'),
    'region'   => env('S3_REGION'),
    'bucket'   => env('S3_BUCKET'),
    'base_url' => env('S3_BASE_URL'),
],
```

## Credits

- [Kevin Dierkx](https://github.com/kevindierkx)

### License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
