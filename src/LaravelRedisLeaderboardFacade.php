<?php

namespace R4nkt\LaravelRedisLeaderboard;

use Illuminate\Support\Facades\Facade;

/**
 * @see \R4nkt\LaravelRedisLeaderboard\LaravelRedisLeaderboard
 */
class LaravelRedisLeaderboardFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-redis-leaderboard';
    }
}
