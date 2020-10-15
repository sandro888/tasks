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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','NewsController@index')->name('adminindex');
// Route::get('/admin','NewsController@index')->name('adminindex');
Route::get('/admin/create','NewsController@create')->name('admincreate');

Route::post('/admin/store','NewsController@store')->name('adminstore');
Route::post('/admin/destroy','NewsController@destroy')->name('admindelete');

Route::get('/admin/show/{id}','NewsController@show')->name('adminshow');

Route::post('/admin/store/comments','NewsController@storecomment')->name('storecomment');
Route::post('/admin/update','NewsController@update')->name('adminupdate');


Route::get('/admin/edit/{id}','NewsController@edit')->name('adminedit');


