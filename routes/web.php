<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;




Route::controller(UserController::class)->group(function () {
  Route::get('/user', 'index')->name('user.index');
  Route::post('/user', 'store')->name('user.store');
  Route::get('/user/create', 'create')->name('user.create');
  Route::get('/user/{user}', 'show')->name('user.show');
  Route::get('/user/{user}/edit', 'edit')->name('user.edit');
  Route::put('/user/{user}/update', 'update')->name('user.update');
  Route::delete('/user/{user}/destroy', 'destroy')->name('user.destroy');
});

Route::controller(RoleController::class)->group(function () {
  Route::get('/role', 'index')->name('role.index');
  Route::post('/role', 'store')->name('role.store');
  Route::get('/role/create', 'create')->name('role.create');
  Route::get('/role/{uroleer}', 'show')->name('role.show');
  Route::get('/role/{role}/edit', 'edit')->name('role.edit');
  Route::put('/role/{role}/update', 'update')->name('role.update');
  Route::delete('/role/{role}/destroy', 'destroy')->name('role.destroy');
});


