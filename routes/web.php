<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    AuthController,
    HomeController,
    TaskController
};


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('/task')->group(function() {
    Route::get('/', [TaskController::class, 'index'])->name('tasks.index');
    Route::get('/create', [TaskController::class, 'create'])->name('tasks.create');
    Route::post('/store', [TaskController::class, 'store'])->name('tasks.store');
    Route::get('/edit/{id}', [TaskController::class, 'edit'])->name('tasks.edit');
    Route::delete('/delete/{id}', [TaskController::class, 'delete'])->name('tasks.delete');
});

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');