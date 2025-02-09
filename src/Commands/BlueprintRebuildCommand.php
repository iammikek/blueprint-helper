<?php

declare(strict_types=1);

namespace Automica\AutomicaBlueprintHelper\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class BlueprintRebuildCommand extends Command
{
    public $signature = 'blueprint:rebuild';

    public $description = 'Rebuilds blueprint project';

    public function handle(): int
    {
        $this->command('blueprint:erase');

        $this->reset();

        $this->command('blueprint:build');

        $this->command('migrate:fresh', [
            '--seed' => true,
        ]);

        $this->comment('All done');

        return self::SUCCESS;
    }

    private function command(string $string, array $params = []): void
    {
        $exitCode = $this->call($string, $params);

        // Get the output of the command
        $output = Artisan::output();

        // Display the output to the console
        $this->info($output);

        // Optionally, handle the exit code
        if ($exitCode !== 0) {
            $this->error('The command did not execute successfully.');
        }
    }

    private function reset(): void
    {
        copy('https://raw.githubusercontent.com/laravel/laravel/refs/heads/11.x/routes/web.php', base_path().'/routes/web.php');
    }
}
