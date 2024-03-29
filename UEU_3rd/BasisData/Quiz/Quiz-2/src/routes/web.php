<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {

    // user
    $router->get('/user', ['uses' => 'UserController@index']);
    $router->post('/user', ['uses' => 'UserController@create']);
    $router->get('/user/{id}', ['uses' => 'UserController@show']);
    $router->put('/user/{id}', ['uses' => 'UserController@update']);
    $router->delete('/user/{id}', ['uses' => 'UserController@destroy']);

    // product
    $router->get('/product', ['uses' => 'ProductController@index']);

    // order
    $router->get('/order', ['uses' => 'OrderController@index']);

    $router->delete('/order/{id}', ['uses' => 'OrderController@destroy']);

    $router->get('/order/{id}', ['uses' => 'OrderController@show']);

    // kategori
    $router->get('/kategori', ['uses' => 'KategoriController@index']);

    $router->get('/kategori/{id}', ['uses' => 'KategoriController@show']);

    $router->delete('/kategori/{id}', ['uses' => 'KategoriController@destroy']);

    $router->put('/kategori/{id}', ['uses' => 'KategoriController@update']);

    $router->post('/kategori', ['uses' => 'KategoriController@create']);
});
