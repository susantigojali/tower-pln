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

//Route::model('tower', 'App\Model\Tower');

Route::get('tower/create', ['as' => 'tower.create', 'uses' => 'TowerController@create']);
Route::post('tower', ['as' => 'tower.store', 'uses' => 'TowerController@store']);
Route::get('tower', ['as' => 'tower.index', 'uses' => 'TowerController@index']);
//Route::get('tower/{tower}', ['as' => 'tower.show', 'uses' => 'TowerController@show']);
Route::get('tower/{tower}/edit', ['as' => 'tower.edit', 'uses' => 'TowerController@edit']);
Route::put('tower/{tower}', ['as' => 'tower.update', 'uses' => 'TowerController@update']);
Route::get('tower/{tower}/delete', ['as' => 'tower.get_destroy', 'uses' => 'TowerController@destroy']);