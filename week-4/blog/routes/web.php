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
// Route::get('/', function () {
//     return view('guest.index');
// });
Route::get("/", "postsController@create");
// Route::get('/', function () {
// })->name('toredirect');
Route::post("/posts/store","PostsController@store")->name("storeposts");
Route::get('/homepage', function () {
    return view('posts.create');
})->name('toredirect');
Route::post('/test', function (Request $req) {
    $data = [
        [
            "name" => $req->post()["name"],
            "lastname" => $req->post()["lastname"],
            "email" => $req->post()["email"],
            "biography" => $req->post()["biography"],
            "date" => $req->post()["date"]
        ],

    ];
    return view('guest.table', ["newdata" => $data]);
})->name("testpost");
