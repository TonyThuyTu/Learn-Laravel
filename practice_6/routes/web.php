<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TaskController;

use App\Http\Controllers\PageController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('tasks', TaskController::class);

Route::get('/', [PageController::class, 'home'])->name('home.page');

Route::get('/task', [PageController::class, 'task'])->name('task.page');

Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');

Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');      // list + create form

Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');     // create

Route::get('/tasks/{id}', [TaskController::class, 'show'])->name('tasks.show');   // show by id

Route::get('/tasks/{id}/edit', [TaskController::class, 'edit'])->name('tasks.edit'); // edit page

Route::put('/tasks/{id}', [TaskController::class, 'update'])->name('tasks.update');  // update

Route::patch('/tasks/{id}/toggle', [TaskController::class, 'toggle'])->name('tasks.toggle'); // mark done/pending

Route::delete('/tasks/{id}', [TaskController::class, 'destroy'])->name('tasks.destroy'); // delete