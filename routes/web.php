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


Route::group(['prefix' => 'admin','middleware'=>'auth'], function() {
    Route::get('menu/create','Admin\MenuController@add');
    Route::get('menu/create', 'Admin\MenuController@add');
    Route::post('menu/create', 'Admin\MenuController@create');
    Route::get('menu/edit', 'Admin\MenuController@edit'); // 追記
    Route::post('menu/edit', 'Admin\MenuController@update');
    Route::get('menu/delete','Admin\MenuController@delete');
    Route::get('menu', 'Admin\MenuController@index');
  
    // Route::get('carts', 'CartController@index');
     
   
});
 Route::get('menu', 'Admin\MenuController@index');
Route::get('/', 'MenuController@home');
Route::get('house1', 'MenuController@index');
Route::get('home', 'MenuController@index');
Route::get('reserves/index','ReserveController@index');
Route::post('reserves/create','ReserveController@create');
Route::get('reserves/edit','ReserveController@edit');
Route::post('reserves/edit','ReserveController@update');
Route::get('reserves/delete','ReserveController@delete');


Auth::routes();


