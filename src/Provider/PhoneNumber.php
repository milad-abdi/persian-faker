<?php

namespace Miladabdi\PersianFaker\Provider;

class PhoneNumber
{
    public function phone($operator = null): string
    {
        $number = match ($operator) {
            'mci' => '0912',
            'rightel' => '0921',
            'irancell' => '0935',
            default => '09' . mt_rand(10, 99),
        };
        return $number . mt_rand(1000000, 9999999);
    }
}
