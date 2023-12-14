<?php

// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Your controller code here
        $validatedData = $request->validate([
            'id' => 'required',
            'full_name' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email',
            'company' => 'required',
            'address' => 'required',
        ]);

        Contact::create($validatedData);

        return redirect('/')->with('success', 'Contact added successfully');
    }
}
