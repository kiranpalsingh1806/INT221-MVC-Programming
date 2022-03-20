<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\LoopsController;

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

Route::get('/test', function () {
    return 'Welcome to Laravel class';
});
Route::get('/test2', function () {
    return view('test2');
});

Route::get('/profile', function () {
    return view('greeting', ['name' => 'Kiranpal']);
});

// Controllers

Route::get('/start', [TestController::class, 'index']);
Route::get('/first', [UserController::class, 'index']);

// Loops - Blade
Route::get('/loops', [LoopsController::class, 'index']);

Route::Get('/users/profile', function () {
    //
})->name('profile');
