<?php

use GlassCode\PersianFaker\Generator\Generator as PackageGenerator;

it('get provider path', function () {
    $generator = new PackageGenerator();

    $this->assertEquals('GlassCode\PersianFaker\Provider\\', $generator->getProviderPath());
});

it('get providers classes', function () {
    $this->assertIsArray(PackageGenerator::providers());
});
