<?php

namespace GlassCode\PersianFaker\Lively;

final class SimpleLively extends LivelyAbstract
{

    public static function from(mixed $item): mixed
    {
        return $item;
    }
}
