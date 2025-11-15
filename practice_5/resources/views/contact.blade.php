@extends('layouts.app')

@section('title', 'Contact Page')

@section('content')

<h2>Contact Me</h2>

{{-- Success message --}}
@if(session('success'))
    <p style="color: green; font-weight:bold;">{{ session('success') }}</p>
@endif

{{-- Validation errors --}}
@if ($errors->any())
    <ul style="color: red;">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('contact.save') }}" method="POST">
    @csrf

    <label>Name:</label>
    <input type="text" name="name" value="{{ old('name') }}"><br><br>

    <label>Phone:</label>
    <input type="text" name="phone" value="{{ old('phone') }}"><br><br>

    <label>Email:</label>
    <input type="email" name="email" value="{{ old('email') }}"><br><br>

    <label>Message:</label>
    <textarea name="message">{{ old('message') }}</textarea><br><br>

    <button type="submit">Send</button>

</form>

@endsection
