<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{

    public function home()

    {

        return view('home');

    }

    public function contact() 

    {

        return view ('contact');

    }

    public function saveContact(Request $request)

    {
        // 1. Validation
        $request->validate([
            'name' => 'required|min:3',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'message' => 'required|min:5',
        ]);

        // 2. Build contact data
        $data = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message,
            'time' => now()->toDateTimeString()
        ];

        // 3. Load old data (if file exists)
        $existing = [];

        if (Storage::exists('contacts.json')) {
            $existing = json_decode(Storage::get('contacts.json'), true);
        }

        // 4. Add new contact to array
        $existing[] = $data;

        // 5. Save back to JSON file
        Storage::put('contacts.json', json_encode($existing, JSON_PRETTY_PRINT));

        // 6. Redirect back with message
        return redirect()->back()->with('success', 'Contact sent successfully!');

    }
    
}
