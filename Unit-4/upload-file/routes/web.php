<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;

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
//     return view('welcome');
// };

// Route::get('/upload', function () {
//     return view('Upload');
// });

Route::get('upload', [UploadController::class, 'uploadForm']);
Route::post('upload', [UploadController::class, 'uploadFile'])->name('upload.uploadFile');

Route::get('/session/get', [SessionController::class, 'getSessionData'])->name('session.get');
Route::get('/session/set', [SessionController::class, 'storeSessionData'])->name('session.get');
Route::get('/session/remove', [SessionController::class, 'deleteSessionData'])->name('session.delete');


Route::view('/loogin', 'loogin');
Route::post('/loogin', [LooginController::class, 'index']);
Route::view('proofile', 'proofile');

Route::get('proofile', function () {
    if (!session()->has('data')) {
        return redirect('loogin');
    }
    return view('proofile');
});

Route::get('loogout', function () {
    session()->forget('data');
    return redirect('loogin');
});
