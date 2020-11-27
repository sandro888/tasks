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

// Route::get('/', function () {
//     return view('/home');
// });

Auth::routes();
Auth::routes(['verify' => false]);
Route::get('/', 'PostsController@index')->name('adminindex');

Route::get('/admin',function(){
    return "you araa god";
})->middleware(['auth','auth.admin']);

Route::get('/admin/create', 'PostsController@create')->name('admincreate')->middleware(['auth','auth.admin']);;
Route::post('/admin/store', 'PostsController@store')->name('adminstore');
Route::get('/admin/show/{id}','PostsController@show')->name('adminshow');
