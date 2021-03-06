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

$router->post('/signup', 'Auth\SignupController@signup');
$router->post('/login', 'Auth\LoginController@login');
$router->get('/user/{id}/valid', 'User\UserController@isValidId');

$router->group([
    'middleware' => 'auth',
], function () use ($router) {
    $router->get('/user', 'User\UserController@index');
});
