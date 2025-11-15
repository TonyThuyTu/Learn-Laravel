<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'home'])->name('home.page');

Route::get('/contact', [PageController::class, 'contact'])->name('contact.page');

Route::post('/contact/save', [PageController::class, 'saveContact'])->name('contact.save');