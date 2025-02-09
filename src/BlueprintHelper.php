<?php

namespace Automica\BlueprintHelper;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class BlueprintHelper extends Command
{
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
        copy('https://raw.githubusercontent.com/laravel/laravel/refs/heads/11.x/routes/web.php', base_path().'/routes/web.php');
    }
}
