<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/listings', [ListingController::class, 'index']);
Route::get('/listings/{id}', [ListingController::class, 'show']);
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');
Route::put('/listings/{id}', [ListingController::class, 'update'])->middleware('auth');
Route::delete('/listings/{id}', [ListingController::class, 'destroy'])->middleware('auth');