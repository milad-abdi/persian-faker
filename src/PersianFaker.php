<?php

namespace Miladabdi\PersianFaker;

use Miladabdi\PersianFaker\Generator\Generator;

class PersianFaker
{
    private static Generator $generator;

    public static function create(): Generator
    {
       return self::$generator = new Generator();
    }
}
