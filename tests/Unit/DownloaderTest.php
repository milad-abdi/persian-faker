<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;

it('check repository url exists', function () {

    $response = Http::get(config('persian_faker.repository_url'));

    expect($response->status())
        ->not()
        ->toBe(404);

})->group('unit', 'downloader', 'unit.downloader');

it('check test/inspiration.json exists in repository url', function () {

    $response = Http::get(config('persian_faker.repository_url').'/test/inspiration.json');

    expect($response->status())
        ->not()
        ->toBe(404);

})->group('unit', 'downloader', 'unit.downloader');

it('download and save test/inspiration.json from repository url', function () {

    $response = Http::get(config('persian_faker.repository_url').'/test/inspiration.json');

    $jsonValue = json_decode($response->body());

    File::makeDirectory('data');
    File::put('data/inspiration.json', $jsonValue);

    expect(File::exists('data/inspiration.json'))
        ->toBeTrue();

    File::delete('data/inspiration.json');
    File::deleteDirectory('data');

})->group('unit', 'downloader', 'unit.downloader');
