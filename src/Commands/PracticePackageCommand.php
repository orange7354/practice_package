<?php

namespace Orange7354\PracticePackage\Commands;

use Illuminate\Console\Command;

class PracticePackageCommand extends Command
{
    public $signature = 'practice-package';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
