<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::namespace('App\Http\Controllers\Api')->group(function (){
    Route::post('users', 'UserController@store');
    Route::post('login', 'AuthController@login');

    Route::middleware('auth.jwt')->group(function () {
        Route::apiResource('users', UserController::class)->except(['store']);
        Route::apiResource('projects', ProjectController::class);
        Route::apiResource('tasks', TaskController::class);
        Route::apiResource('comments', CommentController::class);
        Route::apiResource('tags', TagController::class);

        Route::post('logout', 'AuthController@logout');
        Route::get('me', 'AuthController@me');
    });
});
