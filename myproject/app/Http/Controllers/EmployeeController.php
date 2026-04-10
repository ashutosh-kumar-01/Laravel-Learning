<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = [
            ["name" => "Rahul", "salary" => 45000],
            ["name" => "Aman", "salary" => 25000],
            ["name" => "Neha", "salary" => 32000]
        ];

        return view('employees', compact('employees'));
    }
}