@extends('layouts.app')

@section('title', 'Contact Page')

@section('content')
    <h2>Welcome to my home page!</h2>
    <p>Email: tonynguyen@gmail.com</p>
    <h3>Send me!</h3>
    <form action="/contact/save" method="post">
        @csrf

        <label for="email">Email</label>
        <input type="email" name="contact" id="contact">

        <button type="submit">Save</button>

    </form>

    @if(session('success'))

        <div style="color: green; font-weight: bold;">
            {{ session('success') }}
        </div>
        
    @endif

@endsection


