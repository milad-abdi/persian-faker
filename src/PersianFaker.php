<?php

namespace GlassCode\PersianFaker;

use GlassCode\PersianFaker\Generator\Generator;

class PersianFaker
{
    private static Generator $generator;

    public static function create(): Generator
    {
        return self::$generator = new Generator();
    }
}
