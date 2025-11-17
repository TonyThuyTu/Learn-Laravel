@extends('layouts.app')

@section('title', 'Tasks')

@section('content')
<h1>Task Manager</h1>

{{-- Create Form --}}
<form action="{{ route('tasks.store') }}" method="POST">
    @csrf

    <label>Title</label><br>
    <input type="text" name="title" required><br><br>

    <label>Description</label><br>
    <textarea name="description" required></textarea><br><br>

    <button type="submit">Create Task</button>
</form>

<hr>

{{-- Task List --}}
<h2>All Tasks</h2>

@foreach ($tasks as $task)
    <div style="border: 1px solid #ddd; padding: 10px; margin-bottom: 10px;">
        <strong>{{ $task->title }}</strong>  
        @if ($task->is_done)
            <p style="color: green">Done</p>
        @else
            <p style="color: blue">Pending</p>
        @endif
        <br>
        {{ $task->description }}

        <br><br>

        {{-- Toggle --}}
        <form action="{{ route('tasks.toggle', $task->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('PATCH')
            <button type="submit">
                {{ $task->is_done ? 'Mark Pending' : 'Mark Done' }}
            </button>
        </form>

        {{-- Edit --}}
        <a href="{{ route('tasks.edit', $task->id) }}">Edit</a> |

        {{-- Show --}}
        <a href="{{ route('tasks.show', $task->id) }}">View</a>

        {{-- Delete --}}
        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button onclick="return confirm('Delete this task?')" type="submit">Delete</button>
        </form>
    </div>
@endforeach

@endsection
