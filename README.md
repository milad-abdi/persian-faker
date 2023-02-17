# This is my package persian-faker

[![Latest Version on Packagist](https://img.shields.io/packagist/v/milad-abdi/persian-faker.svg?style=flat-square)](https://packagist.org/packages/milad-abdi/persian-faker)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/milad-abdi/persian-faker/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/milad-abdi/persian-faker/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/milad-abdi/persian-faker/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/milad-abdi/persian-faker/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/milad-abdi/persian-faker.svg?style=flat-square)](https://packagist.org/packages/milad-abdi/persian-faker)

## Installation

You can install the package via composer:

```bash
composer require milad-abdi/persian-faker
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="persian-faker-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="persian-faker-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="persian-faker-views"
```

## Usage

```php
$persianFaker = new Miladabdi\PersianFaker();
echo $persianFaker->echoPhrase('Hello, Miladabdi!');
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

- [milad abdi](https://github.com/milad-abdi)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
