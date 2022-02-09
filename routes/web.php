<?php

use App\Http\Controllers\Site\BlogController;
use App\Http\Controllers\Site\CategoryController;
use App\Http\Controllers\Site\ContactController;
use App\Http\Controllers\Site\HomeController;
use Illuminate\Support\Facades\Route;

Route::prefix('site')->group(function () {
    Route::get('/', HomeController::class)->name('site.home');

    Route::get('/products', [CategoryController::class, 'index'])->name('site.products');
    Route::get('/products/{slug}', [CategoryController::class, 'show'])->name('site.products.category');

    Route::get('/blog', BlogController::class)->name('site.blog');

    Route::view('/about', 'site.about.index')->name('site.about');

    Route::get('/contact', [ContactController::class, 'index'])->name('site.contact');
    Route::post('/contact', [ContactController::class, 'form'])->name('site.contact.form');
});
