<?php

use App\Http\Controllers\DocsController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Mail;
use App\Http\Controllers\UploadFileController;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

// Problem 1 - Addition purposes...
Route::view("/login", "users");
Route::post("/users", [UsersController::class, 'getData']);

//Problem 2 (First Part) - For uploading user information
Route::view("/docs", "user-docs");
Route::post("/upload-docs", [DocsController::class, 'getData']);

// Problem 2 (Second Part) - For uploading document of user
Route::get('/uploadfile', [UploadFileController::class, 'index']);
Route::post('/uploadfile', [UploadFileController::class, 'showUploadFile']);

// Problem 3 - For sending mail.
// Mail is send from - johndrake6481@gmail.com
// Mail sent to - kiranpalsingh1806@gmail.com
Route::get('/email', [Website::class, 'index']);

// Alternative - Problem 3
Route::view("/sendmessage", "mail-form");
Route::post("/sendmessage", [MailController::class, 'getData']);
