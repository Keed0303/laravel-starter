<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::controller(UserController::class)->group(function () {
  Route::get('/user', 'index');
  Route::post('/user', 'store')->name('user.store');
  Route::get('/user/create', 'create');
  Route::get('/user/{user}', 'show')->name('user.show');
  Route::get('/user/{user}/edit', 'edit')->name('user.edit');
  Route::put('/user/{user}/update', 'update')->name('user.update');
  Route::delete('/user/{user}/destroy', 'destroy')->name('user.destroy');
});



