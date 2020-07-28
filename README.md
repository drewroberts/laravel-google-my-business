# Laravel Package for opinionated usage of Media (images & videos)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/drewroberts/media.svg?style=flat-square)](https://packagist.org/packages/drewroberts/media)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/drewroberts/media/run-tests?label=tests)](https://github.com/drewroberts/media/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/drewroberts/media.svg?style=flat-square)](https://packagist.org/packages/drewroberts/media)


This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require drewroberts/media
```

Add the cloudinary disk to the filesystem config and set the environment variables for your Cloudinary account.

```php
// config/filesystem.php
return [
    ...
    'disks' => [
        ...
        'cloudinary' => [
            'driver' => 'cloudinary',
            'api_key' => env('CLOUDINARY_API_KEY'),
            'api_secret' => env('CLOUDINARY_API_SECRET'),
            'cloud_name' => env('CLOUDINARY_CLOUD_NAME'),
        ]
    ]
];
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="DrewRoberts\Media\MediaServiceProvider" --tag="migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="DrewRoberts\Media\MediaServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

``` php
$media = new DrewRoberts\Media();
echo $media->echoPhrase('Hello, DrewRoberts!');
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email packages@drewroberts.com instead of using the issue tracker.

## Credits

- [Drew Roberts](https://github.com/drewroberts)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.