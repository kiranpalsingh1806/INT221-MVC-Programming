<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;
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

Route::middleware('auth')->group(function(){
Route::resource('todo', TodoController::class);
Route::put('todos/complete/{todo}', [TodoController::class, 'complete'])->name('todo.complete');
Route::delete('todos/incomplete/{todo}', [TodoController::class, 'incomplete'])->name('todo.incomplete');
});



 

Route::get('/', function () {
    return view('welcome');
});

Route::get('user', [UserController::class, 'index']);
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');





/*
todos controller
Route::get('todo', [TodoController::class, 'index'])->name('todo.index');
Route::get('todo/create', [TodoController::class, 'create']);
Route::post('todo/create', [TodoController::class, 'store']);
Route::get('todo/edit/{id}', [TodoController::class, 'edit']);
Route::patch('todo/update/{todo}', [TodoController::class, 'update'])->name('todo.update');
Route::delete('todo/delete/{todo}', [TodoController::class, 'delete'])->name('todo.delete'); */