<?php

namespace GlassCode\PersianFaker\Provider;

use GlassCode\PersianFaker\Exception\FakerNotExistsException;
use Illuminate\Support\Facades\File;

class Lively extends FakerProvider
{
    protected mixed $fileContent;

    /**
     * @throws FakerNotExistsException
     */
    public function __construct(string $filename) {

        if (!File::exists('data/' . $filename)){
            throw FakerNotExistsException::jsonFileNotExists($filename);
        }

        $this->fileContent = File::json('data/' . $filename);
    }

    public function item(): mixed
    {
        return self::randomElement($this->fileContent);
    }
}
