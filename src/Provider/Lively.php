<?php

namespace GlassCode\PersianFaker\Provider;

use GlassCode\PersianFaker\Exception\FakerNotExistsException;
use GlassCode\PersianFaker\Lively\LivelyAbstract;
use GlassCode\PersianFaker\Lively\SimpleLively;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;

class Lively extends FakerProvider
{
    protected Collection $fileContent;
    protected mixed $dataProvider;

    /**
     * @throws FakerNotExistsException
     */
    public function __construct(string $filename, string $livelyAbstract = null) {

        if (!File::exists('data/' . $filename)){
            throw FakerNotExistsException::jsonFileNotExists($filename);
        }

        $this->fileContent = Collection::make(File::json('data/' . $filename));
        $this->dataProvider = $livelyAbstract;
    }

    public function item(): mixed
    {
        $item = self::randomElement($this->fileContent->toArray());

        if (!$this->dataProvider){

            return SimpleLively::from($item);
        }

        return call_user_func([$this->dataProvider, 'from'],$item);
    }
}
