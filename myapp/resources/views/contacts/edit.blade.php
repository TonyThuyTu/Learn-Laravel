@extends('layouts.app')

@section('title', 'Edit Contact')

@section('content')
    <h2>Edit Contact</h2>

    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name</label><br>
        <input type="text" name="name" id="name" value="{{ old('name', $contact->name) }}" required>
        <br><br>

        <label for="email">Email</label><br>
        <input type="email" name="email" id="email" value="{{ old('email', $contact->email) }}" required>
        <br><br>

        <label for="content">Message</label><br>
        <textarea name="content" id="content" required>{{ old('content', $contact->content) }}</textarea>
        <br><br>

        <button type="submit">Update</button>
    </form>

    @if ($errors->any())
        <div style="color: red; margin-top: 10px;">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
@endsection
