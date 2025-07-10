<?php

namespace DavidAdigwu\LaravelDeviceBan;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use DavidAdigwu\LaravelDeviceBan\Commands\LaravelDeviceBanCommand;

class LaravelDeviceBanServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-device-ban')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_device_ban_table')
            ->hasCommand(LaravelDeviceBanCommand::class);
    }
}
