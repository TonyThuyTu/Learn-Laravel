<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // List + Create Form
    public function index()
    {
        $tasks = Task::orderBy('created_at', 'desc')->get();
        return view('task', compact('tasks'));
    }

    // Store new task
    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required',
            'description' => 'required',
        ]);

        Task::create([
            'title'       => $request->title,
            'description' => $request->description,
            'is_done'     => 0,
        ]);

        return redirect()->route('tasks.index');
    }

    // Show by ID
    public function show($id)
    {
        $task = Task::findOrFail($id);
        return view('tasks.show', compact('task'));
    }

    // Edit page
    public function edit($id)
    {
        $task = Task::findOrFail($id);
        return view('tasks.edit', compact('task'));
    }

    // Update task
    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);

        $task->update([
            'title'       => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('tasks.index');
    }

    // Toggle done/pending
    public function toggle($id)
    {
        $task = Task::findOrFail($id);
        $task->update([
            'is_done' => !$task->is_done
        ]);

        return redirect()->route('tasks.index');
    }

    // Delete task
    public function destroy($id)
    {
        Task::findOrFail($id)->delete();
        return redirect()->route('tasks.index');
    }
}
