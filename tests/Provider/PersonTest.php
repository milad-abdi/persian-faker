<?php

use GlassCode\PersianFaker\PersianFaker;

it('get name', function (){

    $faker = PersianFaker::create();

    $this->assertIsString($faker->person()->name());
});

it('get lastName', function (){

    $faker = PersianFaker::create();

    $this->assertIsString($faker->person()->lastName());
});

it('get certificate', function (){

    $faker = PersianFaker::create();

    $this->assertIsString($faker->person()->certificate());
});

it('get email', function (){

    $faker = PersianFaker::create();

    $this->assertIsString($faker->person()->email());
});

it('get phone', function (){

    $faker = PersianFaker::create();

    $this->assertIsString($faker->person()->phone());
});

it('get job', function (){

    $faker = PersianFaker::create();

    $this->assertIsString($faker->person()->job());
});
