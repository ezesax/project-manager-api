<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/users', 'App\Http\Controllers\Api\UserController@store');
Route::post('/login', 'App\Http\Controllers\Api\AuthController@login');

Route::middleware('auth.jwt')->group(function () {
    Route::apiResource('/users', 'App\Http\Controllers\Api\UserController')->except(['store']);
    Route::apiResource('/projects', 'App\Http\Controllers\Api\ProjectController');
    Route::apiResource('/tasks', 'App\Http\Controllers\Api\TaskController');
    Route::apiResource('/comments', 'App\Http\Controllers\Api\CommentController');
    Route::apiResource('/tags', 'App\Http\Controllers\Api\TagController');

    Route::post('/logout', 'App\Http\Controllers\Api\AuthController@logout');
    Route::get('/me', 'App\Http\Controllers\Api\AuthController@me');
});
