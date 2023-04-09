<?php

namespace GlassCode\PersianFaker\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \GlassCode\PersianFaker\PersianFaker
 */
class PersianFaker extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \GlassCode\PersianFaker\PersianFaker::class;
    }
}
