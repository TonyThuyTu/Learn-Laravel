<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/name/{name}/{age}', [PageController::class, 'name'])->name('name.page');

Route::get('/scores', [PageController::class, 'scores'])->name('scores.page');