<?php

namespace Automica\AutomicaBlueprintHelper;

use Automica\AutomicaBlueprintHelper\Commands\AutomicaBlueprintHelperCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class AutomicaBlueprintHelperServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('automica-blueprint-helper')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_automica_blueprint_helper_table')
            ->hasCommand(AutomicaBlueprintHelperCommand::class);
    }
}
