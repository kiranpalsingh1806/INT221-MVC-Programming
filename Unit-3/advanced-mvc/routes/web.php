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
    return ("The current url is " . URL()->current() . " and previous url is " . URL()->previous());
});

Route::get('/third', function () {
    return ("The current url is " . URL()->current() . " and previous URL is  " . URL()->previous());
});

Route::get('/example', function () {
    return "Returned URL is " . URL()->to('another/route');
});

Route::get('/kiranpalsingh', function () {
    return "Returned URL is " . URL()->to('users/btech/computerscience/kiranpalsingh');
});

Route::get('example1', function () {
    return URL()->to('another/route', array('kiranpal', 'singh'));
});

Route::get('the/best/avenger', array('as' => 'ironman', function () {
    return 'Tony Stark';
}));

Route::get('example2', function () {
    return URL()->route('ironman');
});

Route::get('the/{first}/avenger/{second}', array(
    'as' => 'ironman1',
    function ($first, $second) {
        return "Tany Sturk, the {$first} avenger {$second}.";
    }
));

Route::get('example3', function () {
    return URL()->route('ironman1', array('worst', 'ever'));
});

Route::get('tony/the/{first}/genius', 'Stark1@tony');
Route::get('exampleee', function () {
    return URL()->action('Stark1@tony', array('narcissist'));
});

Route::get('image', function () {
    return URL()->asset('img/logo.png');
});

Route::get('image2', function () {
    return URL::secureAsset('img/logo.png');
});

Route::get('anyother/route', function () {
    return View()->make('urlshortcut');
});
