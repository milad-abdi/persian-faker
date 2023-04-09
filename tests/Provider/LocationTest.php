<?php

use GlassCode\PersianFaker\PersianFaker;

it('get state', function () {
    $faker = PersianFaker::create();

    $this->assertIsString($faker->location()->state());
});

it('get country', function () {
    $faker = PersianFaker::create();

    $this->assertIsString($faker->location()->country());
});

it('get address', function () {
    $faker = PersianFaker::create();

    $this->assertIsString($faker->location()->address());
});
