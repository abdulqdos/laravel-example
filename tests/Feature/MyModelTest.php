<?php

use Abdulqdos\LaravelExample\Models\MyModel;

it('can create a model', function () {
    $myModel = MyModel::Factory()->create();
    $this->assertModelExists($myModel);
});

it('can create a uppercase of name', function () {
    $myModel = MyModel::Factory()->create(['name' => 'ali']);

    expect($myModel->getUpperCaseName())->toBe('ALI');
});
