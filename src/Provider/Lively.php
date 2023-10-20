<?php

namespace GlassCode\PersianFaker\Provider;

use GlassCode\PersianFaker\Exception\FakerNotExistsException;
use GlassCode\PersianFaker\Lively\LivelyAbstract;
use GlassCode\PersianFaker\Lively\SimpleLively;
use Illuminate\Support\Facades\File;

class Lively extends FakerProvider
{
    protected mixed $fileContent;
    protected mixed $dataProvider;

    /**
     * @throws FakerNotExistsException
     */
    public function __construct(string $filename, string $livelyAbstract = null) {

        if (!File::exists('data/' . $filename)){
            throw FakerNotExistsException::jsonFileNotExists($filename);
        }

        $this->fileContent = File::json('data/' . $filename);
        $this->dataProvider = $livelyAbstract;
    }

    public function item(): mixed
    {
        $item = self::randomElement($this->fileContent);

        if (!$this->dataProvider){

            return SimpleLively::from($item);
        }

        return call_user_func([$this->dataProvider, 'from'],$item);
    }
}
