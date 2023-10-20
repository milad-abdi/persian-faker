<?php

use GlassCode\PersianFaker\Exception\FakerNotExistsException;
use GlassCode\PersianFaker\Lively\LivelyAbstract;
use GlassCode\PersianFaker\Lively\NameLively;
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

it('download names objects from repo and check item has kes name and gender', function (){

    File::deleteDirectory('data');

    artisan('lively:download test/names.json');

    $item = PersianFaker::create()->lively('names.json')->item();

    expect($item)
        ->toHaveKeys(['name','gender']);

    File::deleteDirectory('data');

})->group('provider', 'lively', 'provider.lively');

it('download names objects from repo and get object as LivelyAbstract.php instance', function (){

    File::deleteDirectory('data');

    artisan('lively:download test/names.json');

    $item = PersianFaker::create()->lively('names.json', NameLively::class)->item();

    expect($item)
        ->toBeInstanceOf(LivelyAbstract::class);

    File::deleteDirectory('data');

})->group('provider', 'lively', 'provider.lively');
