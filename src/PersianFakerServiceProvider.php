<?php

namespace GlassCode\PersianFaker;

use GlassCode\PersianFaker\Commands\DownloadCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class PersianFakerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->hasConfigFile('persian_faker')
            ->hasCommands([
                DownloadCommand::class,
            ])
            ->name('persian-faker');
    }
}
