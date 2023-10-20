<?php

namespace GlassCode\PersianFaker\Provider;

use GlassCode\PersianFaker\Exception\FakerNotExistsException;
use GlassCode\PersianFaker\Lively\LivelyAbstract;
use GlassCode\PersianFaker\Lively\SimpleLively;
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
        $item = self::randomElement($this->fileContent);

        if (!is_array($item)){

            return SimpleLively::from($item);
        }

        return $item;
    }
}
