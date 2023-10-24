<?php

namespace GlassCode\PersianFaker\Lively;

class NameLively extends LivelyAbstract
{
    protected static array $item;

    public static function from(mixed $item): mixed
    {
        self::$item = $item;

        return new static;
    }

    public function name(): string|null
    {
        if (!array_key_exists('name',self::$item)){
            return null;
        }

        return self::$item['name'];
    }
}
