<?php

use App\Http\Controllers\Site\BlogController;
use App\Http\Controllers\Site\CategoryController;
use App\Http\Controllers\Site\ContactController;
use App\Http\Controllers\Site\HomeController;
use Illuminate\Support\Facades\Route;

Route::prefix('site')->group(function () {
    Route::get('/', HomeController::class);

    Route::get('/products', [CategoryController::class, 'index']);
    Route::get('/products/{slug}', [CategoryController::class, 'show']);

    Route::get('/blog', BlogController::class);

    Route::view('sobre', 'site.about.index');

    Route::get('/contact', [ContactController::class, 'index']);
    Route::post('/contact', [ContactController::class, 'form']);
});
