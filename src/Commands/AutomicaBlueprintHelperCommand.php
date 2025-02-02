<?php

namespace Automica\AutomicaBlueprintHelper\Commands;

use Illuminate\Console\Command;

class AutomicaBlueprintHelperCommand extends Command
{
    public $signature = 'automica-blueprint-helper';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
