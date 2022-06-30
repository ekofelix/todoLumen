<?php

use App\Http\Controllers\ExampleController;
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
$router->get('/todo', [ExampleController::class, 'index']);
$router->get('/todo/{id}', [ExampleController::class, 'show']);
$router->post('/todo/save', [ExampleController::class, 'store']);
$router->post('/todo/{id}/update', [ExampleController::class, 'update']);
$router->post('/todo/{id}/delete', [ExampleController::class, 'destroy']);
