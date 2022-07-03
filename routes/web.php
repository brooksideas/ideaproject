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
    return view('welcome');
});

Route::get('/ideas', 'IdeaController@index');
Route::get('/ideas/{idea}', 'IdeaController@show');
Route::post('/ideas', 'IdeaController@save');
Route::get('/ideas/{idea}/edit', 'IdeaController@edit');
Route::patch('/ideas/{idea}', 'IdeaController@update');

