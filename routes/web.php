<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

Route::get('/', function () {
    return view('welcome');
});
//Route::resource('tasks', App\Http\Controllers\TasksController::class);

//list of tasks
Route::get('/tasks', [TasksController::class, 'index'])->name('tasks.index');

//list of form
Route::get('/tasks/create', [TasksController::class, 'create'])->name('tasks.create');

//create a new task
Route::post('/tasks', [TasksController::class, 'store'])->name('tasks.store');

//show a single task
Route::get('/tasks/{task}', [TasksController::class, 'show'])->name('tasks.show');

//show edit form
Route::get('/tasks/{task}/edit', [TasksController::class, 'edit'])->name('tasks.edit');

//update a task
Route::put('/tasks/{task}', [TasksController::class, 'update'])->name('tasks.update');

//delete a task
Route::delete('/tasks/{task}', [TasksController::class, 'destroy'])->name('tasks.destroy');




//Route::resource('tasks', App\Http\Controllers\TasksController::class);