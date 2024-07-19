<?php

namespace Rjcalifornia\LoftyGuard;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
//use VendorName\Skeleton\Commands\SkeletonCommand;

class LoftyGuardServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('lofty-guard')
            ->hasConfigFile()
           // ->hasViews()
            ->hasMigrations(['create_roles_table', 'create_permissions_table', 'create_role_permission_table'])
            ->runsMigrations();
           // ->hasCommand(SkeletonCommand::class);
    }
}