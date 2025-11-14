@extends('layouts.app')

@section('title', 'Skills Page')

@section('content')
    <h2>Here is my skills</h2>
    
    <ul>
        @foreach ($skills as $skill)
        <li>{{ $skill }}</li>
        @endforeach
    </ul>

@endsection