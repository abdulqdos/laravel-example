<?php

use function Pest\Laravel\artisan;

it('can test DB', function () {
    dd(config('database'));
//    expect(true)->toBeTrue();
});

it('can test Command', function () {
    artisan(\Abdulqdos\LaravelExample\Commands\LaravelExampleCommand::class)->assertExitCode(\Illuminate\Console\Command::SUCCESS);
});
