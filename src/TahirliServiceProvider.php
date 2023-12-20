<?php

namespace Tahirli\Kapitalbank;

use Illuminate\Support\ServiceProvider;

class TahirliServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/commands/BladeFileCreate.php' => app_path('Console/Commands/BladeFileCreate.php'),
        ]);
    }

}