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

Route::group(['prefix' => 'admin/pages', 'namespace' => 'App\Extensions\Pages\Controllers', 'as' => 'admin.pages.'], function () {
    Route::get('/', 'IndexController@index')->name('index');
    Route::get('/create', 'IndexController@create')->name('create');
    Route::post('/store', 'IndexController@store')->name('store');
    Route::get('/edit/{id}', 'IndexController@edit')->name('edit');
    Route::put('/update/{id}', 'IndexController@update')->name('update');
    Route::get('/destroy/{id}', 'IndexController@destroy')->name('destroy');
});
