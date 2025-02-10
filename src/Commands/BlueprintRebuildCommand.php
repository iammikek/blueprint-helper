<?php

declare(strict_types=1);

namespace Automica\BlueprintHelper\Commands;

use Automica\BlueprintHelper\BlueprintHelper;

class BlueprintRebuildCommand extends BlueprintHelper
{
    public $signature = 'blueprint:rebuild';

    public $description = 'Rebuilds blueprint project';

    public function handle(): int
    {
        $this->command('blueprint:erase');

        $this->reset();

        $this->command('blueprint:build');

        $this->command('migrate:fresh');

        $this->reseed();

        $this->comment('All done');

        return self::SUCCESS;
    }
}
