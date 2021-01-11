<?php

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

Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users')->middleware('can:view');
Route::post('/users/delete', [App\Http\Controllers\UserController::class, 'delete'])->name('users.delete');
Route::post('/users/update', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
Route::get('/users/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
Route::get('/tasks', [App\Http\Controllers\ToDoController::class, 'index'])->name('tasks');
Route::get('/tasks/create', [App\Http\Controllers\ToDoController::class, 'create'])->name('tasks.create');
Route::post('/tasks/store', [App\Http\Controllers\ToDoController::class, 'store'])->name('tasks.store');
Route::post('/tasks/complete', [App\Http\Controllers\ToDoController::class, 'taskComplete'])->name('tasks.complete');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
