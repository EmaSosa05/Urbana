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
    return view('pages.home');
});

Route::get('/nosotros', function () {
    return view('pages.about');
});

Route::get('/categoria/{category}', 'ProjectsController@index');
Route::get('/categoria/{category}/{folder}', 'ProjectsController@show');