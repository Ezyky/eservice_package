<?php

namespace Ezyky\Eserviceapi;

use Ezyky\Eserviceapi\Console\InstallEserviceApi;
use Illuminate\Support\ServiceProvider;

class EserviceApiServiceProvider extends ServiceProvider
{
  public function register()
  {
    //
    $this->app->bind('calculator', function ($app) {
      return new Calculator();
    });
    $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'eserviceapi');
  }

  public function boot()
  {
    //
    if ($this->app->runningInConsole()) {
      // $this->publishes([
      //   __DIR__.'/../config/config.php' =>   config_path('eserviceapi.php'),
      // ], 'config');

      $this->commands([
        InstallEserviceApi::class,
      ]);
    }
  }
}
