<?php

namespace ANP\LaravelArbor;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Foundation\Application;

class ArborGraphQLServiceProvider extends ServiceProvider
{
  public function register(): void
  {
    $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravelarbor');

    $this->app->singleton(\Softonic\GraphQL\Client::class, function (Application $app) {
      return \Softonic\GraphQL\ClientBuilder::build(
        config('laravelarbor.url') . '/graphql/query',
        [
          'auth' => [
            config('laravelarbor.username'),
            config('laravelarbor.password'),
          ],
        ]
      );
    });
  }
}
