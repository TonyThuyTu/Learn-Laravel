<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Display all contacts
    public function index() 
    {
        $contacts = Contact::all();
        return view('contact', compact('contacts'));
    }


    // Show create form
    public function create()
    {
        return view('contacts.create');
    }

    // Store new contact
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|min:3',
            'email'   => 'required|email',
            'content' => 'required|min:5',
        ]);

        Contact::create($request->only(['name','email','content']));

        return redirect('/contacts')->with('success', 'Send successful!');
    }

    // Show one contact
    public function show(Contact $contact)
    {
        return view('contacts.show', compact('contact'));
    }

    // Show edit form
    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    // Update a contact
    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'name'    => 'required|min:3',
            'email'   => 'required|email',
            'content' => 'required|min:10',
        ]);

        $contact->update($request->only(['name','email','content']));

        return redirect()->route('contacts.index')->with('success', 'Update successful!');
    }

    // Delete a contact
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect('/contacts')->with('success', 'Delete successful!');
    }
}
