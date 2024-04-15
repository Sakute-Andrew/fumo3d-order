<?php

use Illuminate\Routing\Router;
use  App\Admin\Controllers\UserController;
use  App\Admin\Controllers\MaterialsController;
use  App\Admin\Controllers\OrderController;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('demo/users', UserController::class);
    $router->resource('demo/orders', OrderController::class);
    $router->resource('demo/materials', MaterialsController::class);

});
