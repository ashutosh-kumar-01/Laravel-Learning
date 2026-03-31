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
        ]);

        Student::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'age'=>$request->age,
            'course'=>$request->course,
            'password'=>Hash::make($request->password)
        ]);

        return redirect('/register')->with('success','Registration Successful');
    }

}