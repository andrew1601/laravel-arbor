<?php

namespace ANP\LaravelArbor\Facades;

use Illuminate\Support\Facades\Facade;

class ArborGraphQL extends Facade
{
  protected static function getFacadeAccessor(): string
  {
    return \Softonic\GraphQL\Client::class;
  }
}
