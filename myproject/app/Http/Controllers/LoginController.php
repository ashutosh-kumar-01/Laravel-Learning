<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->session()->put('username', $request->input('username'));
        // $username = $request->input('username');
        // return $username;
        return redirect('/');
    }
}
