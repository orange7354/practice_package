<?php

namespace Orange7354\PracticePackage;

use Orange7354\PracticePackage\Commands\PracticePackageCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class PracticePackageServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('practice-package')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_practice-package_table')
            ->hasCommand(PracticePackageCommand::class);
    }
}
