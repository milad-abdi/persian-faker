<?php

namespace Miladabdi\PersianFaker\Provider;

class Payment extends Base
{
    protected static array $bank = [
        ' بانک مرکزی',
        'بانک صادرات',
        'بانک ملت',
        'بانک تجارت',
        'بانک سپه',
        'بانک کشاورزی',
        'بانک صنعت و معدن',
        'بانک مسکن',
        'بانک پاسارگاد',
        'بانک شهر',
        'بانک سامان',
        'بانک اقتصاد نوین',
        'ایران زمین',
        'بانک پارسیان',
    ];

    public function bank(): string
    {
        return self::randomElement(self::$bank);
    }

    public function cardNumber(): string
    {
        return mt_rand(1111111111, 9999999999) . mt_rand(111111, 999999);
    }

    public function sheba(): string
    {
      return 'IR'. mt_rand(1111111111, 9999999999) . mt_rand(1111111111, 9999999999) . mt_rand(1111, 9999);
    }


}
