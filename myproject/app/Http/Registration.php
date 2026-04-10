<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;

class Registration extends Controller
{

    public function create()
    {
        return view('registration');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students,email',
            'age' => 'required|integer|min:18',
            'course' => 'required',
            'password' => 'required|min:8'
        ],
        [
            "name.min" => "Minimum 3 characters required",
            "name.max" => "Maximum 50 characters allowed",
            "name.regex" => "Only letters and spaces are allowed",
        ]
        );

        

        return redirect('/register')->with('success','Registration Successful');
    }

}