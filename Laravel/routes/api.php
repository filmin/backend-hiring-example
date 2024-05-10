<?php

use Illuminate\Routing\Router;

/** @var Router $router */
$router->group([
    'prefix' => 'users'
], function (Router $router) {
    $router->post('/', [
        'as' => 'users.post.create',
        'uses' => 'CreateUserController@__invoke'
    ]);
});
