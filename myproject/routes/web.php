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
/* Route::get('/admin',function(){
    return view('adminpage')->with('','')->with('','')->with('','');
}); */


Route::get('/products', function() {
    $products=[
        ["id"=>1,"name"=>"AC","price"=>45000,"description"=>"Powerful air conditioning for instant cooling and comfort."],
        ["id"=>2,"name"=>"Cooler","price"=>15000,"description"=>"Energy-efficient cooler for fresh, breezy air in summer."],
        ["id"=>3,"name"=>"Fan","price"=>5000,"description"=>"Compact fan for quick and effective air circulation."]
    ];
    return view('productinfo', compact('products'));
});


// create a route to store usernam="ashutosh" as a cookie value for 30 
// cookie is an info stored on client's browser
// cookie value is stored in apllication layar
// don't save confidential info as a cookie data

Route::get('/set-cookie',function(){
    $time=30;
    return response('Cookie has been set')->cookie('username','ashutosh',$time);
});




