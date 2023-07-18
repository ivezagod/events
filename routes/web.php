<?php

use App\Http\Controllers\CompleteTaskController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('tasks',[TaskController::class,'index'])->name('tasks.index');
Route::get('/tasks/{task:name}/complete',CompleteTaskController::class)->name('tasks.complete');
Route::resource('posts',PostController::class);
