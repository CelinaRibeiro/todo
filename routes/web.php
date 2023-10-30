<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    AuthController,
    HomeController,
    TaskController
};


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('/task')->group(function() {
    Route::get('/index', [TaskController::class, 'index'])->name('tasks.index');
    Route::get('/create', [TaskController::class, 'create'])->name('tasks.create');
    Route::post('/store', [TaskController::class, 'store'])->name('tasks.store');
    Route::get('/edit/{id}', [TaskController::class, 'edit'])->name('tasks.edit');
    Route::put('/update/{id}', [TaskController::class, 'update'])->name('tasks.update');
    Route::get('/destroy/{id}', [TaskController::class, 'destroy'])->name('tasks.destroy');
});

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login_action'])->name('login_action');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'register_action'])->name('user.register_action');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');