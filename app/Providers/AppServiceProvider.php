<?php

namespace App\Providers;

use App\Alien;
use App\Contracts\Calculator;
use App\Ghost;
use App\Http\Controllers\AlienController;
use App\Http\Controllers\GhostController;
use App\Http\Controllers\ScreamController;
use App\Http\Controllers\SkullController;
use App\Scream;
use App\Skull;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->when(AlienController::class)
                  ->needs(Calculator::class)
                  ->give(function () {
                      return new Alien;
                  });

        $this->app->when(GhostController::class)
                  ->needs(Calculator::class)
                  ->give(function () {
                      return new Ghost;
                  });

        $this->app->when(ScreamController::class)
                  ->needs(Calculator::class)
                  ->give(function () {
                      return new Scream;
                  });

        $this->app->when(SkullController::class)
                  ->needs(Calculator::class)
                  ->give(function () {
                      return new Skull;
                  });
    }
}
