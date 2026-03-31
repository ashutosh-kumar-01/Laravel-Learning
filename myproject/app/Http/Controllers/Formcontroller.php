<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            "name" => "required|min:1|max:15|regex:/^[A-Za-z\s]+$/",
            "username" => "required|min:1|max:20|regex:/^[A-Za-z0-9_]+$/",
            "email" => "required|email",
            "password" => "required|min:8|max:20|regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#$%^&*]).+$/"
        ]);

        $name = $request->name;
        $email = $request->email;
        $username = $request->username;
        $token = $request->_token;

        return "
        <h2>Form Submitted Successfully</h2>
        <p>Name: $name</p>
        <p>Username: $username</p>
        <p>Email: $email</p>
        ";
    }
}