<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'home'])->name('home.page');

Route::get('/about', [PageController:: class, 'about'])->name('about.page');

Route::get('/service', [PageController:: class, 'service'])->name('service.page');

Route::get('/greet/{name}', [PageController:: class, 'greet'])->name('greet.page');

Route::get('/sum/{a}/{b}', [PageController::class, 'sum'])->name('sum.page');

Route::get('/minus/{a}/{b}', [PageController::class, 'minus'])->name('minus.page');