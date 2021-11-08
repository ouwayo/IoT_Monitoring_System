<?php

namespace App\Providers;

use ConsoleTVs\Charts\Registrar as Charts;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    // ...

    /**
     * Bootstrap any application services.
     */
    public function boot(Charts $charts)
    {
        $charts->register([
            \App\Charts\UserChart::class,
            \App\Charts\MethaneGas::class,
            \App\Charts\Temperature::class,
            \App\Charts\Humidity::class
        ]);
    }
}