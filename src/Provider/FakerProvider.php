<?php

namespace GlassCode\PersianFaker\Provider;

class FakerProvider
{
    public static function randomElement($array)
    {
        return $array[array_rand($array)];
    }
}
