@extends('layouts.app')

@section('title', 'Edit Task')

@section('content')
<h1>Edit Task</h1>

<form action="{{ route('tasks.update', $task->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Title</label><br>
    <input type="text" name="title" value="{{ $task->title }}" required><br><br>

    <label>Description</label><br>
    <textarea name="description" required>{{ $task->description }}</textarea><br><br>

    <button type="submit">Update</button>
</form>

@endsection
