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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'customers'], function () {
   Route::get('/','CustomerController@index')->name('index');
   Route::get('/show/{id}','CustomerController@show')->name('show');
   Route::get('/create','CustomerController@create')->name('create');
   Route::post('/create','CustomerController@store')->name('store');
   Route::get('/edit/{id}','CustomerController@edit')->name('edit');
   Route::post('/edit/{id}','CustomerController@update')->name('update');
   Route::get('/destroy/{id}','CustomerController@destroy')->name('destroy');
});
