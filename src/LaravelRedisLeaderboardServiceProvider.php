<?php

namespace R4nkt\LaravelRedisLeaderboard;

use R4nkt\LaravelRedisLeaderboard\Commands\LaravelRedisLeaderboardCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelRedisLeaderboardServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-redis-leaderboard')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-redis-leaderboard_table')
            ->hasCommand(LaravelRedisLeaderboardCommand::class);
    }
}
