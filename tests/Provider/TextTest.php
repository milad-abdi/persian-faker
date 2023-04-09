<?php

use GlassCode\PersianFaker\PersianFaker;

it('get word', function () {

    $faker = PersianFaker::create();

    $this->assertIsString($faker->text()->word());
});

it('get sentences', function () {

    $faker = PersianFaker::create();

    $this->assertIsString($faker->text()->sentence());
});

it('get paragraph', function (){

    $faker = PersianFaker::create();

    $this->assertIsString($faker->text()->paragraph());
});
