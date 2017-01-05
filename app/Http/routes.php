<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


// 后台管理
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware'=>'web'], function ($router) {
    // 用户登陆
    $router->match(['get', 'post'], '/login', 'IndexController@login');
});

// 后台管理
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware'=>['web', 'admin.login']], function ($router) {
    // 后台首页
    $router->get('/', 'IndexController@index');

    // 欢迎页
    $router->get('/welcome', 'IndexController@welcome');

    // 后台用户管理
    $router->resource('/admin','AdminController');
});