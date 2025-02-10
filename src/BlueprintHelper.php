<?php

namespace Automica\BlueprintHelper;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class BlueprintHelper extends Command
{
    private string $source = 'https://raw.githubusercontent.com/laravel/laravel/refs/heads/master';

    private array $files = [
        '/routes/web.php',
        '/database/migrations/0001_01_01_000000_create_users_table.php',
        '/database/migrations/0001_01_01_000001_create_cache_table.php',
        '/database/migrations/0001_01_01_000002_create_jobs_table.php',
    ];

    public function command(string $string, array $params = []): void
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

    public function reset(): void
    {
        $source = $this->source;

        // delete local migrations
        array_map('unlink', array_filter((array)glob(base_path() . "/database/migrations/*")));

        // recreate from master
        collect($this->files)->each(function ($file) use ($source) {
            copy("{$source}{$$file}", base_path() . $file);
        });
    }
}
