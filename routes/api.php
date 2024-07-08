<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::namespace('App\Http\Controllers\Api')->group(function (){
    Route::post('/users', 'UserController@store');
    Route::post('/login', 'AuthController@login');

    Route::middleware('auth.jwt')->group(function () {
        Route::apiResource('/users', 'UserController')->except(['store']);
        Route::apiResource('/projects', 'ProjectController');
        Route::apiResource('/tasks', 'TaskController');
        Route::apiResource('/comments', 'CommentController');
        Route::apiResource('/tags', 'TagController');

        Route::post('/logout', 'AuthController@logout');
        Route::get('/me', 'AuthController@me');
    });
});
