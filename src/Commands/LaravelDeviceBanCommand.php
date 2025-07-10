<?php

namespace DavidAdigwu\LaravelDeviceBan\Commands;

use Illuminate\Console\Command;

class LaravelDeviceBanCommand extends Command
{
    public $signature = 'laravel-device-ban';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
