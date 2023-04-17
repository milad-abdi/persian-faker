# Laravel persian faker package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/milad-abdi/persian-faker.svg?style=flat-square)](https://packagist.org/packages/milad-abdi/persian-faker)
[![run-tests](https://github.com/milad-abdi/persian-faker/actions/workflows/run-tests.yml/badge.svg)](https://github.com/milad-abdi/persian-faker/actions/workflows/run-tests.yml)
## Installation

You can install the package via composer:

```bash
composer require glasscode/persian-faker
```

## Usage


Create fake data Use `GlassCode\PersianFaker\PersianFaker` to create and initialize a faker generator, which can generate data by calling methods named after the type of data you want.

## Example


```php
$faker = \GlassCode\PersianFaker\PersianFaker::create();

// simple text
$faker->text()->word() //ساعت
$faker->text()->sentence() //تاریخ دو بار تکرار میشود : یکی به صورت تراژدی و دیگری به صورت کمدی.
$faker->text()->paragraph() // متن طولانی

// locations type
$faker->location()->state() //تهران
$faker->location()->country() //آفریقای جنوبی
$faker->location()->address() //خیابان آزادی ،نبش خیابان رودکی

// payments info
$faker->payment()->bank() //بانک صادرات
$faker->payment()->sheba() //IR222858082460621046509226
$faker->payment()->cardNumber() //4563440120604719

// Person info
$faker->person()->job() //آرایشگر
$faker->person()->name() //علی
$faker->person()->lastName() // کریمی
$faker->person()->certificate() //لیسانس
$faker->person()->email() //Shayne@yahoo.com
$faker->person()->phone() //09222770548

```


## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.


## Credits

- [milad abdi](https://github.com/milad-abdi)
- [mahdi mansouri](https://github.com/mahdimsr)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
