<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController; 
use App\Http\Controllers\Auth\RegisterController; 
use App\Http\Controllers\Task\TaskController; 
use App\Http\Controllers\Task\CreateTaskController; 

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

Route::get('/', [TaskController::class, 'index'])->name('tasksPage');
Route::get('/task_completed/{task}', [TaskController::class, 'destroy'])->name('taskCompleted');
Route::get('/task_view/{task}', [TaskController::class, 'show'])->name('taskView'); 

Route::get('/task_update/{task}', [TaskController::class, 'update'])->name('taskUpdate'); 
Route::post('/task_update/{task}', [TaskController::class, 'saveUpdate']); 

Route::get('/task_remind/{task}', [TaskController::class, 'remind'])->name('taskRemind'); 

Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/login', function(){
    return redirect('/login/*'); 
});
Route::get('/login/{register_success}', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('loginUser');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/create_task', [CreateTaskController::class, 'index'])->name('createTask');
Route::post('/create_task', [CreateTaskController::class, 'store']);

