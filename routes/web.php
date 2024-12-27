<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\EmailVerify;
use App\Http\Controllers\Auth\Registration;
use App\Http\Controllers\Auth\Sessions;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Public;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('cars', [Public\Cars::class, 'index']);

Route::get('/', [HomeController::class, 'index']);
Route::get('/get-blade-main', [HomeController::class, 'indexBladeTest']);
Route::get('/test', [HomeController::class, 'test']);
Route::get('/forma', [HomeController::class, 'forma']);
Route::post('/form-post', [HomeController::class, 'formPost']);
//------------------------
Route::prefix('auth')->group(function () {
    Route::controller(Sessions::class)->group(function () {
        Route::middleware('guest')->get('login', 'create')->name('auth.sessions.create');
        Route::middleware('guest')->post('login', 'store')->name('auth.sessions.store');
        Route::middleware('auth')->get('logout', 'logout')->name('auth.sessions.logout');
    });

    Route::controller(Registration::class)->group(function () {
        Route::middleware('guest')->get('register', 'create')->name('auth.registration.create');
        Route::middleware('guest')->post('register', 'store')->name('auth.registration.store');
    });
    Route::controller(EmailVerify::class)->group(function () {
        Route::middleware('auth')->get('need-verify', 'showPrompt')->name('auth.email.prompt');
        Route::middleware('auth')->post('send-notification', 'sendNotification')->name('auth.email.send');
        Route::middleware('auth', 'signed')->get('email-check/{id}/{hash}', 'check')
            ->name('verification.verify'); // this Route-name hardcoded in framework
    });
});

Route::middleware('auth')->get('secret', fn() => 'secret page');
Route::middleware(['auth', 'verified:auth.email.prompt'])->get('secret2', fn() => 'secret page for verified');


Route::middleware(['auth', 'verified:auth.email.prompt'])->prefix('admin')->group(function () {
    Route::put('cars/{car}/restore', [CarController::class, 'restore'])->name('cars.restore');
    Route::get('cars/trash', [CarController::class, 'trash'])->name('cars.trash');
    Route::resource('cars', CarController::class);

    Route::resource('brands', BrandController::class);

    Route::middleware('can:cars')->resource('tags', TagController::class);

    Route::resource('articles', ArticleController::class);

    Route::post('comments', [CommentController::class, 'store'])->name('comments.store');
    Route::post('comments2/{modelName}/id/{id}', [CommentController::class, 'store2'])->name('comments.store2');
});



//Route::get('carst', function(){return 'sdfsd';})->name('cars.trash');
//Route::delete('/cars/{car}/soft-del', [CarController::class, 'softDelete'])->name('cars.softDelete');
//Route::get();
