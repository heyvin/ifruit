<?php

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

$app->get('/', 'HomeController@index');
$app->get('/orders', 'OrderController@index');
$app->get('/order/create', 'OrderController@create');
$app->get('/order/{id}/edit', 'OrderController@edit');
$app->post('/order/add', 'OrderController@add');
$app->post('/order/update', 'OrderController@update');
