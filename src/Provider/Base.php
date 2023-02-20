<?php

namespace Miladabdi\PersianFaker\Provider;

class Base
{
    public static function randomElement($array)
    {
        return $array[array_rand($array)];
    }
}
