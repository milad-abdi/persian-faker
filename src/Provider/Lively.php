<?php

namespace GlassCode\PersianFaker\Provider;

use Illuminate\Support\Facades\File;

class Lively extends FakerProvider
{
    protected mixed $fileContent;

    public function __construct(string $filename) {

        if (!File::exists('data/' . $filename . '.json')){
            dd('Throw Exception File not Exists');
        }

        $this->fileContent = File::json('data/' . $filename . '.json');
    }

    public function item(): mixed
    {
        return self::randomElement($this->fileContent);
    }
}
