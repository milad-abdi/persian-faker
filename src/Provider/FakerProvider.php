<?php

namespace Miladabdi\PersianFaker\Provider;

class FakerProvider
{
    public static function randomElement($array)
    {
        return $array[array_rand($array)];
    }
}
