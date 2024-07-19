<?php

namespace Rjcalifornia\LaravelWalledGarden;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
//use VendorName\Skeleton\Commands\SkeletonCommand;

class LaravelWalledGardenServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-walled-garden')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_migration_roles_table')
            ->hasMigration('create_migration_permissions_table')
            ->hasMigration('create_migration_special_permissions_table');
           // ->hasCommand(SkeletonCommand::class);
    }
}