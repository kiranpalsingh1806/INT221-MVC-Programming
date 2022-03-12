<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UriController;
use App\Http\Controllers\UserRegistration;

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

// Route::get('/foo/bar', 'UriController@index');
Route::get('/user/kiranpal', [UriController::class, 'index']);


Route::get('/register', function () {
    return view('register');
});

Route::post('/user/register', [UserRegistration::class, 'postRegister']);
