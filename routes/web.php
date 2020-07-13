<?php

use Illuminate\Support\Facades\Route;




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
    return redirect('/index');
});

Route::get('/index', ['as' => 'index' , 'uses' => 'IndexController@index']);
Route::get('/teste', ['as' => 'teste', 'uses' => 'IndexController@teste']);
Route::post('/uploadteste', ['as' => 'uploadteste', 'uses' => 'IndexController@uploadteste']);

// ROUTE TEST
Route::get('/testeapi', ['as' => 'testeapi', 'uses' => 'IndexController@testeapi']);