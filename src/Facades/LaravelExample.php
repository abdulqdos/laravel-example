<?php

namespace Abdulqdos\LaravelExample\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Abdulqdos\LaravelExample\LaravelExample
 */
class LaravelExample extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Abdulqdos\LaravelExample\LaravelExample::class;
    }
}
