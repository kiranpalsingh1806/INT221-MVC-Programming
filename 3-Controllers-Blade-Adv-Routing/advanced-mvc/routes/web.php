<?php

use Illuminate\Support\Facades\Redirect;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('user/{id}', function ($id) {
    return 'The user id is ' . $id;
});

Route::get('users/{name}', function ($name) {
    return 'The name of current user is ' . $name;
});

Route::get('/current/url', function () {
    return "The current url is " . URL()->current();
});

Route::get('/first', function () {
    return Redirect::to('second');
});

Route::get('/second', function () {
    return ("The current url is" . URL()->current() . " " . URL()->previous());
});

Route::get('/third', function () {
    return ("The current url is " . URL()->current() . " and previous URL is  " . URL()->previous());
});

Route::get('example', function () {
    return URL()->to('another/route');
});
