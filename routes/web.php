<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\LandingController;
use App\Http\Middleware\SiteAcess;
use Illuminate\Support\Facades\Route;

Route::middleware(SiteAcess::class)->group(function(){
    Route::controller(LandingController::class)->group(function (){
        Route::get('/', 'index')->name('home');
        Route::get('/coming', 'coming')->name('coming');
    });
    //Route::controller(FormController::class)->group(function () {
    //    Route::get('/form', 'index')->name('form.index');
    //});
});

Route::controller(FormController::class)->group(function () {
    Route::get('/form', 'index')->name('form.index');
});
