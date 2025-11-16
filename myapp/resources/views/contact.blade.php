@extends('layouts.app')

@section('title', 'Contact Page')

@section('content')

<h2>Contact Me</h2>

{{-- CREATE FORM --}}
<form action="{{ route('contacts.store') }}" method="POST">
    @csrf

    <label>Name</label><br>
    <input type="text" name="name" required><br><br>

    <label>Email</label><br>
    <input type="email" name="email" required><br><br>

    <label>Message</label><br>
    <textarea name="content" rows="4" required></textarea><br><br>

    <button type="submit">Send</button>
</form>


{{-- VALIDATION ERRORS --}}
@if ($errors->any())
    <div style="color: red; margin-top: 10px;">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif


{{-- SUCCESS MESSAGE --}}
@if (session('success'))
    <div style="color: green; font-weight: bold; margin-top: 10px;">
        {{ session('success') }}
    </div>
@endif



<hr>

<h3>All Contacts</h3>

{{-- LIST CONTACTS --}}
@if ($contacts->count() > 0)
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Actions</th>
        </tr>

        @foreach ($contacts as $contact)
        <tr>
            <td>{{ $contact->id }}</td>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->content }}</td>

            <td>
                {{-- SHOW --}}
                <a href="{{ route('contacts.show', $contact->id) }}">
                    Show
                </a> |

                {{-- EDIT --}}
                <a href="{{ route('contacts.edit', $contact->id) }}">
                    Edit
                </a> |

                {{-- DELETE --}}
                <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Delete this contact?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
@else
    <p>No contacts yet.</p>
@endif


@endsection
