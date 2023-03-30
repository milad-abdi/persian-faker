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

## Usage


Create fake data Use `Miladabdi\PersianFaker\PersianFaker` to create and initialize a faker generator, which can generate data by calling methods named after the type of data you want.

## Example


```php
$faker = \Miladabdi\PersianFaker\PersianFaker::create();

// simple text
$faker->text()->word() //ساعت
$faker->text()->sentence() //تاریخ دو بار تکرار میشود : یکی به صورت تراژدی و دیگری به صورت کمدی.
$faker->text()->paragraph() // متن طولانی

// locations type
$faker->location()->state() //تهران
$faker->location()->country() //آفریقای جنوبی
$faker->location()->address() //خیابان آزادی ،نبش خیابان رودکی
$faker->job() //آرایشگر
$faker->bank() //بانک صادرات
$faker->sheba() //IR222858082460621046509226
$faker->cardNumber() //4563440120604719
$faker->name() //علی
$faker->lastName() // کریمی
$faker->certificate() //لیسانس
$faker->email() //Shayne@yahoo.com
$faker->phone() //09222770548
$faker->productCategory() //هدفون بیسیم
$faker->productTitle() //لپ تاپ 15.6 اینچی ایسوس مدل VivoBook
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
