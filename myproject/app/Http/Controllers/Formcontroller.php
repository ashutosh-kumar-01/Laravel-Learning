<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Formcontroller extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required','regex:/^[A-Za-z\s]+$/'],
            'email' => ['required','email'],
            'message' => ['required','string','max:1000']
        ]);

        return back()->with('success','Form submitted successfully');
    }
}