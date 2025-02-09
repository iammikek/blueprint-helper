<?php

namespace Automica\BlueprintHelper;

use Automica\BlueprintHelper\Commands\BlueprintRebuildCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class BlueprintHelperServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('blueprint-helper')
            ->hasConfigFile()
            ->hasCommand(BlueprintRebuildCommand::class);
    }
}
