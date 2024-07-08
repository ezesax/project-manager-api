<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/users', 'App\Http\Controllers\Api\UserController@store');
Route::post('/login', 'App\Http\Controllers\Api\AuthController@login');

Route::middleware('auth.jwt')->group(function () {
    Route::get('/users', 'App\Http\Controllers\Api\UserController@index');
    Route::get('/users/{id}', 'App\Http\Controllers\Api\UserController@show');
    Route::put('/users/{id}', 'App\Http\Controllers\Api\UserController@update');
    Route::delete('/users/{id}', 'App\Http\Controllers\Api\UserController@destroy');

    Route::get('/projects', 'App\Http\Controllers\Api\ProjectController@index');
    Route::get('/projects/{id}', 'App\Http\Controllers\Api\ProjectController@show');
    Route::post('/projects', 'App\Http\Controllers\Api\ProjectController@store');
    Route::put('/projects/{id}', 'App\Http\Controllers\Api\ProjectController@update');
    Route::delete('/projects/{id}', 'App\Http\Controllers\Api\ProjectController@destroy');

    Route::get('/tasks', 'App\Http\Controllers\Api\TaskController@index');
    Route::get('/tasks/{id}', 'App\Http\Controllers\Api\TaskController@show');
    Route::post('/tasks', 'App\Http\Controllers\Api\TaskController@store');
    Route::put('/tasks/{id}', 'App\Http\Controllers\Api\TaskController@update');
    Route::delete('/tasks/{id}', 'App\Http\Controllers\Api\TaskController@destroy');

    Route::get('/comments', 'App\Http\Controllers\Api\CommentController@index');
    Route::get('/comments/{id}', 'App\Http\Controllers\Api\CommentController@show');
    Route::post('/comments', 'App\Http\Controllers\Api\CommentController@store');
    Route::put('/comments/{id}', 'App\Http\Controllers\Api\CommentController@update');
    Route::delete('/comments/{id}', 'App\Http\Controllers\Api\CommentController@destroy');

    Route::get('/tags', 'App\Http\Controllers\Api\TagController@index');
    Route::get('/tags/{id}', 'App\Http\Controllers\Api\TagController@show');
    Route::post('/tags', 'App\Http\Controllers\Api\TagController@store');
    Route::put('/tags/{id}', 'App\Http\Controllers\Api\TagController@update');
    Route::delete('/tags/{id}', 'App\Http\Controllers\Api\TagController@destroy');

    Route::post('/logout', 'App\Http\Controllers\Api\AuthController@logout');
    Route::get('/me', 'App\Http\Controllers\Api\AuthController@me');
});
