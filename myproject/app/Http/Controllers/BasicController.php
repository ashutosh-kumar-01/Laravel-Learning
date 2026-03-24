<?php

namespace App\Http\Controllers; //path of a controller

use Illuminate\Http\Request; // Request classs to get some request from the server 

class BasicController extends Controller 
// Inheritance Our class is extending the conteoller means we  can use the functions of controller calss
{
    //make a function to get some strinf response on some route
    public function greet(){
        // return "Hello from controller";
        $product = [
            ["id"=>1,"name"=>"Laptop","price"=>50000],
            ["id"=>2,"name"=>"Mobile","price"=>20000],
            ["id"=>3,"name"=>"Tablet","price"=>30000]
        ];
        return response()->json($product); // this will return the response in json format
    }

    // make some function to return some UI on some route
    public function signup(){
        return view('signup'); // this will return the signup.blade.php file from the views folder
    }
}
