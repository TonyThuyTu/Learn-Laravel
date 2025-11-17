@extends('layouts.app')

@section('title', 'Task Details')

@section('content')
<h1>{{ $task->title }}</h1>

<p><strong>Status:</strong> {{ $task->is_done ? 'Done' : 'Pending' }}</p>
<p><strong>Description:</strong> {{ $task->description }}</p>

<a href="{{ route('tasks.index') }}">Back</a>

@endsection
