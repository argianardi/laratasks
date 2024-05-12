<?php

use App\Http\Controllers\Halo\HaloController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Dari Router ke View
Route::get('/router-view', function () {
    return view('basic.try');
});

// Dari Router ke Controller
Route::get('/router-controller', [HaloController::class, 'index']);

// Dari Router ke Controller ke View
Route::get('/router-controller-view', [HaloController::class, 'routerControllerView']);

Route::controller(TodoController::class)->group(function () {
    Route::get('/todo', 'index')->name('todo');
    Route::post('/todo', 'store')->name('todo.post');
});
