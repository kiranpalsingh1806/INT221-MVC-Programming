<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

Route::post("/users", [UsersController::class, 'getData']);
Route::view("/login", "users");
