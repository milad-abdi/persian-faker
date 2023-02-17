<?php

namespace Miladabdi\PersianFaker;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Miladabdi\PersianFaker\Commands\PersianFakerCommand;

class PersianFakerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('persian-faker')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_persian-faker_table')
            ->hasCommand(PersianFakerCommand::class);
    }
}
