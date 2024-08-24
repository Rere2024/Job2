<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\PublicController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('index', [JobController::class, 'index'])->name('index');
// Route::get('create', [JobController::class, 'create'])->name('jobs.create');
// Route::get('', [JobController::class, 'store'])->name('jobs.store');
// Route::post('create', [JobController::class, 'create'])->name('jobs.create');

Route::get('index', [PublicController::class, 'index'])->name('index');
Route::get('about', [PublicController::class, 'about'])->name('about');
Route::get('category', [PublicController::class, 'category'])->name('category');
Route::get('contact', [PublicController::class, 'contact'])->name('contact');
Route::get('jobDetails', [PublicController::class, 'jobDetails'])->name('jobDetails');
Route::get('jobList', [PublicController::class, 'jobList'])->name('jobList');
Route::get('testimonil', [PublicController::class, 'testimonial'])->name('testimonial');
