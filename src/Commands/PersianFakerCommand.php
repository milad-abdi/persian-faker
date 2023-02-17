<?php

namespace Miladabdi\PersianFaker\Commands;

use Illuminate\Console\Command;

class PersianFakerCommand extends Command
{
    public $signature = 'persian-faker';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
