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
use Illuminate\Http\Request;

Route::get('/','booksController@index')->name('adminindex');
Route::get('/admin/create','booksController@create')->name('admincreate');
Route::post('/admin/store','booksController@store')->name('adminstore');

Route::get('/admin/show/{id}','booksController@show')->name('adminshow');

Route::get('/admin/edit/{id}','booksController@store')->name('adminedit');
Route::post('/admin/update','booksController@update')->name('adminupdate');

Route::post('/admin/destroy','booksController@store')->name('admindelete');

