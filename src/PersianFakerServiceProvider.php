<?php

namespace GlassCode\PersianFaker;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class PersianFakerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->hasConfigFile('persian_faker')
            ->name('persian-faker');
    }
}
