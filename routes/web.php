<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PublicController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('index', [JobController::class, 'index']);



Route::get('about', [PublicController::class, 'about']);
Route::get('category', [PublicController::class, 'category']);
Route::get('contact', [PublicController::class, 'contact']);
Route::get('jobDetails', [PublicController::class, 'jobDetails']);
Route::get('jobList', [PublicController::class, 'jobList']);
Route::get('testimonil', [PublicController::class, 'testimonial']);
