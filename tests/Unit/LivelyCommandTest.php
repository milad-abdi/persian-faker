<?php

use Illuminate\Support\Facades\File;
use function Pest\Laravel\artisan;

it('run lively:download :path command and check file is downloaded in data/ directory', function () {

    artisan('lively:download test/inspiration.json');

    expect(File::exists('data/inspiration.json'))
        ->toBeTrue();

    File::deleteDirectory('data');

})->group('command', 'command.download');

it('run lively:download --path command and throw exception if --path not exists in repository')->group('command', 'command.download');
