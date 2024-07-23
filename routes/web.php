<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

Route::controller(LandingController::class)->group(function () {
    Route::get('/', 'index')->name('home');
});

Route::controller(FormController::class)->group(function () {
    Route::get('/form', 'index')->name('form.index');
});