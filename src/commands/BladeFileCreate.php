<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class BladeFileCreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:blade {bladeName}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creating a new blade template';


    /**
     * @return int
     */
    public function handle(): int
    {
        $path = 'resources/views/';
        $bladeName = strtolower($this->argument('bladeName'));
        $extension = ".blade.php";
        $bladeFullName = $path . $bladeName . $extension;
        $newBlade = fopen($bladeFullName, 'w');

        if ($newBlade) {
            $this->info("INFO  Blade file [resources/views/{$bladeFullName}] created successfully.");
            return Command::SUCCESS;
        }
        return Command::FAILURE;
    }
}
