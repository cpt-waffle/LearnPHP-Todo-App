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

//Pages Routes
Route::get('/new', [
  'uses' => 'PagesController@new',
]);

Route::group(['prefix' => 'todos'], function() {
  Route::get('/', 'TodosController@index');
  Route::get('/new', 'TodosController@new');
  Route::post('/create', 'TodosController@create');
  Route::get('/delete/{id}', 'TodosController@destroy');
  Route::get('/{id}', 'TodosController@show');
  Route::post('/{id}', 'TodosController@update');
  Route::post('/completed/{id}', 'TodosController@completed');
});

