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
Route::get('/', function () {
    return view('guest.form');
});
Route::get('/gettest', function () {
    return view('guest.form');
});
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
