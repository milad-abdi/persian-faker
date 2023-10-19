<?php

use GlassCode\PersianFaker\PersianFaker;

it('get inspiration.json from repo then pars and convert it to simple string faker', function () {


    expect(PersianFaker::create()->lively('inspiration')->item())
        ->toBeString();

})->group('unit', 'convertor', 'unit.convertor');
