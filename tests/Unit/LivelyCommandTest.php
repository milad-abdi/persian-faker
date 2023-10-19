<?php

use GlassCode\PersianFaker\Exceptions\PathNotExistsException;
use Illuminate\Support\Facades\File;
use function Pest\Laravel\artisan;

it('run lively:download :path command and check file is downloaded in data/ directory', function () {

    artisan('lively:download test/inspiration.json');

    expect(File::exists('data/inspiration.json'))
        ->toBeTrue();

    File::deleteDirectory('data');

})->group('command', 'command.download');

it('run lively:download :path command and get success output from console', function (){

    artisan('lively:download test/inspiration.json')
    ->expectsOutput('inspiration faker synced successfully');

    File::deleteDirectory('data');

})->group('command', 'command.download');

it('run lively:download :path command and get error output from console response if --path not exists in repository', function () {

    $fullPath = config('persian_faker.repository_url') . 'test/dummy.json';

    artisan('lively:download test/dummy.json')
        ->expectsOutput("$fullPath not found");

})->group('command', 'command.download');
