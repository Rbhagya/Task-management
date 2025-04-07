<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
/*
Route::get('/', function () {
    return view('welcome');
});   */


Route::get('/', [TaskController::class, 'index'])->name('tasks.index'); // Show all tasks
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create'); // Show create form
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store'); // Store new task

Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit'); // Show edit form
Route::post('/tasks/{task}/update', [TaskController::class, 'update'])->name('tasks.update'); // Update task

Route::post('/tasks/{task}/delete', [TaskController::class, 'destroy'])->name('tasks.destroy'); // Delete task
Route::get('/tasks/pdf', [TaskController::class, 'downloadPDF'])->name('tasks.pdf'); //Create pdf


Route::get('/loginuser',[UserController::class,'loginUser'])->name('loginUser');
Route::post('/Store/user',[UserController::class,'StoreUser'])->name('SaveUser');









