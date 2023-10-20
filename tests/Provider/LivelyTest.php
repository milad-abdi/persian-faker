<?php

use GlassCode\PersianFaker\Exception\FakerNotExistsException;
use GlassCode\PersianFaker\PersianFaker;
use Illuminate\Support\Facades\File;
use function Pest\Laravel\artisan;

it('check inspiration item should be string', function () {

    if (!File::exists('data/inspiration.json')) {
        artisan('lively:download test/inspiration.json');
    }

    expect(PersianFaker::create()->lively('inspiration.json')->item())
        ->toBeString();


    File::deleteDirectory('data');

})->group('provider', 'lively', 'provider.lively');

it('throw exception if inspiration.json not exists', function () {

    File::deleteDirectory('data');

    expect(PersianFaker::create()->lively('inspiration.json')->item())
        ->toThrow(FakerNotExistsException::class);

})->throws(FakerNotExistsException::class)
    ->group('provider', 'lively', 'provider.lively');
