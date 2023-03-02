<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->group(['prefix' => 'api'], function () use ($router) 
{
    $router->get('books', ['uses' => 'BookController@showAllBooks']);
    $router->get('books/{id}', ['uses' => 'BookController@showOneBook']);
    $router->post('books', ['uses' => 'BookController@create']);
    $router->put('books/{id}', ['uses' => 'BookController@update']);
    $router->delete('books/{id}', ['uses' => 'BookController@delete']);
});