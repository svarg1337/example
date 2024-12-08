<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/get-blade-main', [HomeController::class, 'indexBladeTest']);
Route::get('/test', [HomeController::class, 'test']);
Route::get('/forma',[HomeController::class, 'forma']);
Route::post('/form-post',[HomeController::class, 'formPost']);

Route::put('cars/{car}/restore', [CarController::class, 'restore'])->name('cars.restore');
Route::get('cars/trash', [CarController::class, 'trash'])->name('cars.trash');
Route::resource('cars', CarController::class);

Route::resource('brands', BrandController::class);

Route::resource('tags', TagController::class);

Route::resource('articles', ArticleController::class);

Route::post('comments', [CommentController::class, 'store'])->name('comments.store');

//Route::get('carst', function(){return 'sdfsd';})->name('cars.trash');
//Route::delete('/cars/{car}/soft-del', [CarController::class, 'softDelete'])->name('cars.softDelete');
//Route::get();
