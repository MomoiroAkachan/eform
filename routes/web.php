<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

// Basic Application Routes
Route::controller(LandingController::class)->group(function(){
    Route::get('/', 'index')->name('home');
});

// Form routes
Route::controller(FormController::class)->group(function(){
    Route::get('form', 'index')->name('form.index');
    Route::get('form/{page}', 'page')->name('form.page');
});
