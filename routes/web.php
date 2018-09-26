<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin::index');
});

Route::get('/modulo1', function () {
    app('view')->addNamespace('modulo', base_path() . '/resources/views/modulo1');
    return view('modulo::index');
});

Route::get('/modulo2', function () {
    app('view')->addNamespace('modulo', base_path() . '/resources/views/modulo2');
    return view('modulo::index');
});
