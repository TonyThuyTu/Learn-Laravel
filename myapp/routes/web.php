<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/hello/{name}', function ($name) {
//     return "Hello, $name!";
// });

// Route::get('/contact', function () {
//     return view('contact');
// })->name('contact.page');

Route::get('/', [PageController::class, 'home'])->name('home.page');

Route::get('/about', [PageController::class, 'about'])->name('about.page');

Route::get('/contact', [PageController::class, 'contact'])->name('contact.page');

Route::post('/contact/save', [PageController::class, 'saveContact']);

Route::get('/sum/{a}/{b}', [PageController::class, 'sum'])->name('sum.page');

Route::get('/users', [PageController::class, 'users'])->name('users.page');
