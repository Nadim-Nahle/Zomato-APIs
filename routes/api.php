<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\userController;
use App\Http\Controllers\RestoController;
use App\Http\Controllers\ReviewController;



Route::get('/users', [UserController::class, 'getUsers']);
Route::get('/user/{id?}', [UserController::class, 'getUser']);
Route::post('/register', [UserController::class, 'signUp']);
Route::get('/user_type', [UserController::class, 'getUserType']);
Route::post('/login', [UserController::class, 'logIn']);

Route::post('/add_resto', [RestoController::class, 'addResto']);
Route::get('/restos', [RestoController::class, 'getRestos']);
Route::get('/resto/{id?}', [RestoController::class, 'getResto']);

Route::post('/add_review', [ReviewController::class, 'addReview']);
Route::get('/reviews', [ReviewController::class, 'getReviews']);
Route::get('/review/{id?}', [ReviewController::class, 'getReview']);
Route::post('/delete_review', [ReviewController::class, 'deleteReview']);




