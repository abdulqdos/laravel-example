<?php

namespace Abdulqdos\LaravelExample;

use Abdulqdos\LaravelExample\Commands\LaravelExampleCommand;
use Abdulqdos\LaravelExample\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelExampleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-example')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_my_models_table')
            ->hasCommand(LaravelExampleCommand::class);
    }

    public function packageRegistered()
    {

        Route::macro('example', function (string $baseurl) {
            Route::prefix($baseurl)->group(function () {
                Route::get('/', [MyController::class, 'index'])->name('my-route');
            });
        });

        // in the project
        //        Route::example('my-route'); // /example
        //        Route::example('custom-route'); // /custom-route

    }
}
