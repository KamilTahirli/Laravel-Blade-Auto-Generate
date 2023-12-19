<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateBladeFile extends Command
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

        $newBlade = fopen($path . $bladeName . $extension, 'w');

        if ($newBlade) {
            return Command::SUCCESS;
        }
        return Command::FAILURE;
    }
}
