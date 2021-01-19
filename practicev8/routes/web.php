<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;
use Illuminate\Http\Request;
use App\Http\Controllers\UsersController;
// use App\Http\Controllers;
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
    return view('welcome');
});

// Route::get('/user/{name}', function ($name) {
//     return view('users',["user"=>$name]);
// });
Route::get("user/{name}",[UsersController::class,'loadview']);

// Route::view("user","users"); another way

// Route::get('/{name}', function ($name) {
//     return view('sample',["name"=>$name]);
// });

// Route::get('/',function() {
//     return redirect("sample");
// });



// Route::view("sample",'sample');
Route::get('/helloWorld', function () {
    return view('helloWorld');
});
// Route::get('user/{name}',[Controller::class,'index']);
Route::get('/helloWorld/web',"App\Http\Controllers\WebController@index");
Route::get('/todolist/todo',"App\Http\Controllers\TodolistController@todo");
