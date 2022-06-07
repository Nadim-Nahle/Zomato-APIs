<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\userController;



Route::get('/users', [UserController::class, 'getUsers']);
Route::get('/user/{id?}', [UserController::class, 'getUser']);
Route::post('/register', [UserController::class, 'signUp']);

