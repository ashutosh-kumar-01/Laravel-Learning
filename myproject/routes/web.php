<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return "This is the About page";
});


// laravel Redirections
// user for authorization and authentication of a route 
// means if u are accessing /lpu/admin rote will redirect to /route

Route::get('lpu/admin',function(){
    return redirect('/lpu/student');
});

Route::get('lpu/student',function(){
    // return "Welocome to Student Dashboard. You  are Authorized for this route";
    // return view('studentlogin');
    // return redirect('https://ums.lpu.in/lpuums/');  // thsi will redirect to any website  
    return view('adminpage');
});



// attaching header to a route
// headers are used to send additional information with the response
// for example we can send the information about the author of the page , description of the page, keywords etc
// seen in Network tab of the browser
// seen in Json response of the API

Route::get('/headers',function(){
    return response("this is a page with custom headers")
        ->header('Developer', 'LPU')
        ->header('Description', 'This site is developed by LPU students')
        ->header('Developed_In_Year', '2024');
});


// adding header in the main page 
// Route::get('/', function () {
//     return response(view('welcome'))
//         ->header('Developer', 'LPU')
//         ->header('Description', 'This site is developed by LPU students')
//         ->header('Developed_In_Year', '2024');
// });





// passing data to the views
Route::get('/admin',function(){
    return view('adminpage');
});

// passing data to the view with chaining method
Route::get('/admin',function(){
    return view('adminpage')->with('','')->with('','')->with('','');
});


