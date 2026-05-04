<?php

use Abdulqdos\LaravelExample\Commands\LaravelExampleCommand;
use Illuminate\Console\Command;

use function Pest\Laravel\artisan;

it('can test DB', function () {
    dd(config('database'));
    //    expect(true)->toBeTrue();
});

it('can test Command', function () {
    artisan(LaravelExampleCommand::class)->assertExitCode(Command::SUCCESS);
});
