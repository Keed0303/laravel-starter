<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/user', [UserController::class, 'index']);
Route::post('/user', [UserController::class, 'store'])->name('user.store');
Route::get('/user/create', [UserController::class, 'create']);
Route::get('/user/{user}', [UserController::class, 'show'])->name('user.show');
Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/{user}/update', [UserController::class, 'update'])->name('user.update');
Route::put('/user/{user}/update', [UserController::class, 'update'])->name('user.update');
Route::delete('/user/{user}/destroy', [UserController::class, 'destroy'])->name('user.destroy');