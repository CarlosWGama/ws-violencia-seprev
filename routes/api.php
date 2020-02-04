<?php

// use Illuminate\Routing\Route;


use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/autor_denuncias', 'ApiController@author_reports');

Route::get('/tipos_violacao', 'ApiController@violation_types');

Route::get('/denuncias', 'ApiController@complaints');

Route::post('/cadastro_autor', 'ApiController@saveAuthorReports');

Route::post('/cadastro_denuncia', 'ApiController@saveComplaint');

Route::post('/saveimage', ['as' => 'saveImage', 'uses' => 'ApiController@saveImage']);

Route::get('/verificar_conexao', ['as' => 'verifyConnection', 'uses' => 'ApiController@verifyConnection']);


