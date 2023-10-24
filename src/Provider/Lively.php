<?php

namespace GlassCode\PersianFaker\Provider;

use GlassCode\PersianFaker\Exception\FakerNotExistsException;
use GlassCode\PersianFaker\Lively\LivelyAbstract;
use GlassCode\PersianFaker\Lively\SimpleLively;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;

class Lively extends FakerProvider
{
    protected static Collection $fileContent;
    protected static mixed $dataProvider;
    protected static array $filters;

    /**
     * @throws FakerNotExistsException
     */
    public static function from(string $filename, string $livelyAbstract = null): static {

        if (!File::exists('data/' . $filename)){
            throw FakerNotExistsException::jsonFileNotExists($filename);
        }

        self::$fileContent = Collection::make(File::json('data/' . $filename));
        self::$dataProvider = $livelyAbstract;

        return new self();
    }

    public function filter(string $key, mixed $value): static
    {
        self::$fileContent = self::$fileContent->where($key,$value);

        return new self();
    }

    public function item(): mixed
    {
        $item = self::randomElement(self::$fileContent->toArray());

        if (!self::$dataProvider){

            return SimpleLively::from($item);
        }

        return call_user_func([self::$dataProvider, 'from'],$item);
    }
}
