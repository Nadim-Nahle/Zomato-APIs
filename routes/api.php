<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\userController;
use App\Http\Controllers\RestoController;



Route::get('/users', [UserController::class, 'getUsers']);
Route::get('/user/{id?}', [UserController::class, 'getUser']);
Route::post('/register', [UserController::class, 'signUp']);
Route::get('/user_type', [UserController::class, 'getUserType']);
Route::post('/login', [UserController::class, 'logIn']);

Route::post('/add_resto', [RestoController::class, 'addResto']);
Route::get('/restos', [RestoController::class, 'getRestos']);
