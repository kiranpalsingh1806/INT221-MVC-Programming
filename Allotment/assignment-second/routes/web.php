<?php

use App\Http\Controllers\DocsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

Route::post("/users", [UsersController::class, 'getData']);
Route::post("/upload-docs", [DocsController::class, 'getData']);
Route::view("/login", "users");
Route::view("/docs", "user-docs");
