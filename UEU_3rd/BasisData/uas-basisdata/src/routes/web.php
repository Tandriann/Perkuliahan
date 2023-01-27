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

    // Buku
    $router->get('/buku', ['uses' => 'BukuController@index']);
    $router->post("/buku", ["uses" => "BukuController@create"]);
    $router->put("/buku/{id}", ["uses" => "BukuController@update"]);
    $router->get("/buku/{id}", ["uses" => "BukuController@show"]);
    $router->delete("/buku/{id}", ["uses" => "BukuController@destroy"]);

    // peminjaman
    $router->get('/peminjaman', ['uses' => 'PeminjamanController@index']);
    $router->post("/peminjaman", ["uses" => "PeminjamanController@create"]);
    $router->put("/peminjaman/{id}", ["uses" => "PeminjamanController@update"]);
    $router->get("/peminjaman/{id}", ["uses" => "PeminjamanController@show"]);
    $router->delete("/peminjaman/{id}", ["uses" => "PeminjamanController@destroy"]);

    // kategori
    $router->get('/kategori', ['uses' => 'KategoriController@index']);
    $router->post("/kategori", ["uses" => "KategoriController@create"]);
    $router->put("/kategori/{id}", ["uses" => "KategoriController@update"]);
    $router->get("/kategori/{id}", ["uses" => "KategoriController@show"]);
    $router->delete("/kategori/{id}", ["uses" => "KategoriController@destroy"]);
});
