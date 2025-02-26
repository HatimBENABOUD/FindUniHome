<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\FavoriteController;

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::post('/users', [UserController::class, 'store']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);

Route::get('/listings', [ListingController::class, 'index']);
Route::get('/listings/{id}', [ListingController::class, 'show']);
Route::post('/listings', [ListingController::class, 'store']);
Route::put('/listings/{id}', [ListingController::class, 'update']);
Route::delete('/listings/{id}', [ListingController::class, 'destroy']);

Route::get('/favorites/{user_id}', [FavoriteController::class, 'index']);
Route::post('/favorites', [FavoriteController::class, 'store']);
Route::delete('/favorites', [FavoriteController::class, 'destroy']);