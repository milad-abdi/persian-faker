<?php

namespace GlassCode\PersianFaker\Exception;

class FakerNotExistsException extends \Exception
{
    public static function jsonFileNotExists(string $filename): static
    {
        $repository = config('persian_faker.repository_url');

        return new self("$filename not exists, find your file from $repository and download it using command lively:download");
    }
}
