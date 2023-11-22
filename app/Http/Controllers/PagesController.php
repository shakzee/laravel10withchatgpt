<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function contact()
    {
        return view('pages.contact');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function submitContactForm(Request $request)
{
    // Validate and store data
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'nullable',
        'message' => 'required',
    ]);

    Contact::create($validatedData);

    // Redirect or inform the user
    return back()->with('success', 'Your message has been sent successfully.');
}

}
