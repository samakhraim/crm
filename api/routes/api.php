<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;

  
Route::controller(StudentController::class)->group(function () {
    Route::get('/students', 'index');
    Route::get('/students/{id}', 'show');
    Route::post('/students', 'store');
    Route::put('/students/{id}', 'update');
    Route::patch('/students/{id}', 'partialUpdate');
    Route::delete('/students/{id}', 'destroy');
});
Route::controller(CourseController::class)->group(function () {
    Route::get('/courses', 'index');
    Route::get('/courses/{id}', 'show');
    Route::post('/courses', 'store');
    Route::put('/courses/{id}', 'update');
    Route::patch('/courses/{id}', 'partialUpdate');
    Route::delete('/courses/{id}', 'destroy');
});