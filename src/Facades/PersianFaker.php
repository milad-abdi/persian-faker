<?php

namespace Miladabdi\PersianFaker\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Miladabdi\PersianFaker\PersianFaker
 */
class PersianFaker extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Miladabdi\PersianFaker\PersianFaker::class;
    }
}
