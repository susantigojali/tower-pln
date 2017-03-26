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
    return view('home');
});

//Route::model('tower', 'App\Model\Tower');

//CRUD
Route::get('tower/create', ['as' => 'tower.create', 'uses' => 'TowerController@create']);
Route::post('tower', ['as' => 'tower.store', 'uses' => 'TowerController@store']);
Route::get('tower', ['as' => 'tower.index', 'uses' => 'TowerController@index']);
Route::get('tower/{tower}/edit', ['as' => 'tower.edit', 'uses' => 'TowerController@edit']);
Route::put('tower/{tower}', ['as' => 'tower.update', 'uses' => 'TowerController@update']);
Route::get('tower/{tower}/delete', ['as' => 'tower.get_destroy', 'uses' => 'TowerController@destroy']);

//show map
Route::get('tower/map', ['as' => 'tower.showMap', 'uses' => 'TowerController@showMap']);

Route::get('team', ['as' => 'team', 'uses' => 'TeamController@team']);