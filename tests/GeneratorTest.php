<?php

use Miladabdi\PersianFaker\Generator\Generator as PackageGenerator;

it('get provider path', function () {

    $generator = new PackageGenerator();

    $this->assertEquals('Miladabdi\PersianFaker\Provider\\',$generator->getProviderPath());

});
