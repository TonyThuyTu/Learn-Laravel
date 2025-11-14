<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/', [PageController::class, 'home'])->name('home.page');

route::get('/about', [PageController::class, 'about'])->name('about.page');

route::get('/skills', [PageController::class, 'skills'])->name('skills.page');

route::get('/contact', [PageController::class, 'contact'])->name('contact.page');