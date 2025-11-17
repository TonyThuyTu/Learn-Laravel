<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;

class PageController extends Controller
{
    
    public function home() {

        return view('home');

    }

    public function task() {

        $tasks = Task::all();

        return view('task', compact('tasks'));

    }

}
