<?php

namespace Abdulqdos\LaravelExample\Tests;

use Abdulqdos\LaravelExample\LaravelExampleServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Schema;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Abdulqdos\\LaravelExample\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelExampleServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        Schema::dropAllTables();
        $migrations = include __DIR__.'/../database/migrations/create_my_models_table.php.stub';
        $migrations->up();
    }
}
