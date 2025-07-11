[![Latest Version on Packagist](https://img.shields.io/packagist/v/official-david/laravel-device-ban.svg?style=flat-square)](https://packagist.org/packages/official-david/laravel-device-ban)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/official-david/laravel-device-ban/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/official-david/laravel-device-ban/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/official-david/laravel-device-ban/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/official-david/laravel-device-ban/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/official-david/laravel-device-ban.svg?style=flat-square)](https://packagist.org/packages/official-david/laravel-device-ban)

Laravel Device Ban is a simple and powerful package that helps you prevent devices from creating multiple user accounts on your Laravel application. It works by identifying and blocking devices based on configurable fingerprinting methods, making it harder for malicious users to bypass signup restrictions using the same device.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-device-ban.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-device-ban)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require official-david/laravel-device-ban
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-device-ban-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-device-ban-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-device-ban-views"
```

## Usage

```php
$laravelDeviceBan = new DavidAdigwu\LaravelDeviceBan();
echo $laravelDeviceBan->echoPhrase('Hello, David Adigwu!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [David Adigwu](https://github.com/official-david)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
