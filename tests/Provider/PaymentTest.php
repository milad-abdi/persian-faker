<?php

use Miladabdi\PersianFaker\PersianFaker;

it('get bank',function (){

    $faker = PersianFaker::create();

    $this->assertIsString($faker->payment()->bank());
});

it('get sheba', function () {

    $faker = PersianFaker::create();

    $this->assertIsString($faker->payment()->sheba());
});

it('get card number', function () {

    $faker = PersianFaker::create();

    $this->assertIsString($faker->payment()->cardNumber());
});
