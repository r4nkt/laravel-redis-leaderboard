<?php

namespace R4nkt\LaravelRedisLeaderboard\Commands;

use Illuminate\Console\Command;

class LaravelRedisLeaderboardCommand extends Command
{
    public $signature = 'laravel-redis-leaderboard';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
