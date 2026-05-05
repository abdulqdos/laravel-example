<?php

it('can test a controller', function () {
    Route::example('test');
    $this->get('/test')->assertOk()->assertViewIs('example::myView');
});
