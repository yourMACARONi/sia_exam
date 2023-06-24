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

$router->group(['prefix' => 'api'], function($router) {
    $router->get('books', 'BooksController@index');

    $router->get('books/{id}', 'BooksController@show');

    $router->post('books', 'BooksController@addBook');

    $router->delete('books/{id}', 'BooksController@deleteBook');

    $router->put('/books/{id}', 'BooksController@updateBook');
});