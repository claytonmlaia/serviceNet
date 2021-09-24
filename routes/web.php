<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'App\Http\Controllers\HomeController@index');

Route::get('/CET', 'App\Http\Controllers\ClientesController@index');
Route::post('/CET', 'App\Http\Controllers\ClientesController@store');
Route::get('/CET/{clientes}', 'App\Http\Controllers\ClientesController@show');
Route::get('/CET/EDT/{clientes}', 'App\Http\Controllers\ClientesController@edit');
Route::post('/CET/EDT/{clientes}', 'App\Http\Controllers\ClientesController@update');
Route::delete('/CET/{clientes}', 'App\Http\Controllers\ClientesController@destroy');
