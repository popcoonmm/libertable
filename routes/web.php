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
Auth::routes();

Route::get('/', 'MenuController@home');
Route::get('menu', 'Admin\MenuController@index');
Route::get('house1', 'MenuController@index');
Route::get('home', 'MenuController@index');


Route::group(['prefix' => 'admin','middleware'=>'auth:admin'], function() {
    Route::get('menu/create','Admin\MenuController@add');
    Route::get('menu/create', 'Admin\MenuController@add');
    Route::post('menu/create', 'Admin\MenuController@create');
    Route::get('menu/edit', 'Admin\MenuController@edit');
    Route::post('menu/edit', 'Admin\MenuController@update');
    Route::get('menu/delete','Admin\MenuController@delete');
    Route::get('menu', 'Admin\MenuController@index');
    Route::post('logout',   'Admin\LoginController@logout')->name('admin.logout');
    // Route::get('home',      'Admin\MenuController@indexx')->name('admin.menu');
});

Route::group(['prefix' => 'reserves','middleware'=>'auth:user'], function() {
   Route::get('index','ReserveController@index');
   Route::post('create','ReserveController@create');
   Route::get('edit','ReserveController@edit');
   Route::post('edit','ReserveController@update');
   Route::get('delete','ReserveController@delete');
});

/*
|--------------------------------------------------------------------------
| 3) Admin 認証不要
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin'], function() {
    Route::get('login',     'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login',    'Admin\LoginController@login');
     Route::get('register',     'Admin\RegisterController@register');
    Route::post('register',    'Admin\RegisterController@register');
});


