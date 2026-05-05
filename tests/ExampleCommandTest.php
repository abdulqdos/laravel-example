<?php

use Abdulqdos\LaravelExample\Commands\LaravelExampleCommand;
use Illuminate\Console\Command;
use function Pest\Laravel\artisan;

it('can test Command', function () {
    artisan(LaravelExampleCommand::class)
        ->expectsOutput(config('example.command_output'))
        ->assertExitCode(0);
});

it('can output the another value', function () {
    config()->set('example.command_output', 'output');

    artisan(LaravelExampleCommand::class)
        ->expectsOutput(config('output'))
        ->assertExitCode(0);
});

