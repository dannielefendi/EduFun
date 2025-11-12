<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PopularController;
use App\Http\Controllers\WriterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('article.home');

Route::get('/article/{id}', [ArticleController::class, 'show'])->name('article.info');

Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.info');

Route::get('/writer', [WriterController::class, 'index'])->name('writer.info');

Route::get('/writer/{id}', [WriterController::class, 'show'])->name('writer.detail');

Route::get('/about', function(){
    return view('menu.about');
})->name('about.info');

Route::get('/popular', [PopularController::class, 'index'])->name('popular.index');
