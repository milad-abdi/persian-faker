<?php

namespace GlassCode\PersianFaker\Lively;

class NameLively extends LivelyAbstract
{
    protected static mixed $item;

    public static function from(mixed $item): mixed
    {
        self::$item = $item;

        return new static;
    }
}
