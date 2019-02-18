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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

/**
 * Routes for resource kelas
 */
$router->get('kelas', 'KelasController@all');
$router->get('kelas/{id}', 'KelasController@get');
$router->post('kelas/add', 'KelasController@add');
$router->put('kelas/{id}', 'KelasController@put');
$router->delete('kelas/{id}', 'KelasController@remove');

/**
 * Routes for resource siswa
 */
$router->get('siswa', 'SiswaController@all');
$router->get('siswa/{id}', 'SiswaController@get');
$router->post('siswa/add', 'SiswaController@add');
$router->put('siswa/{id}', 'SiswaController@put');
$router->delete('siswa/{id}', 'SiswaController@remove');
