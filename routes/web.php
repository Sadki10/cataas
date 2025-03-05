<?php

use App\Http\Controllers\CatImageController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome'));
Route::get('/cat-images/{limit?}', [CatImageController::class, 'index'])->name('catImages');
Route::get('/api', [CatImageController::class, 'api'])->name('api.index');
Route::get('/api/{catImage}', [CatImageController::class, 'show'])->name('api.show');
