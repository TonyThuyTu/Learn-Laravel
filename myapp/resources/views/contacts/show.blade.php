@extends('layouts.app')

@section('title', 'View Contact')

@section('content')
    <h2>Contact Details</h2>

    <div style="margin-bottom: 15px;">
        <label><strong>Name:</strong></label><br>
        <input type="text" value="{{ $contact->name }}" readonly style="width: 100%;">
    </div>

    <div style="margin-bottom: 15px;">
        <label><strong>Email:</strong></label><br>
        <input type="email" value="{{ $contact->email }}" readonly style="width: 100%;">
    </div>

    <div style="margin-bottom: 15px;">
        <label><strong>Message:</strong></label><br>
        <textarea readonly style="width: 100%;" rows="5">{{ $contact->content }}</textarea>
    </div>

    <div style="margin-top: 20px;">
        <a href="{{ route('contacts.index') }}">Back to Contacts</a>
    </div>
@endsection
