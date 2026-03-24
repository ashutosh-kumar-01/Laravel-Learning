<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicController; // import the controller class to use its function in the route

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


// make a route to delete teh cookie
Route::get('/delete-cookie',function(){
    return response('Cookie has been deleted')->cookie('username','',-1);
});

// make a route for navigating to student result dashboard
// Route::get('/student/result-2025',function(){
//     return view('resultDashboard');
// });

Route::get('/student/result-2025',function(){
    $Student = [
    ["name"=>"Ashutosh","rollno"=>1234513,"course"=>"B.Tech CSE","result"=>"A+","cgpa"=>9.5],
    ["name"=>"Rahul","rollno"=>1234514,"course"=>"B.Tech ECE","result"=>"A","cgpa"=>9.0],
    ["name"=>"Priya","rollno"=>1234515,"course"=>"B.Tech ME","result"=>"B+","cgpa"=>8.5],
    ["name"=>"Anjali","rollno"=>1234516,"course"=>"B.Tech CSE","result"=>"A-","cgpa"=>8.8],
    ["name"=>"Vikram","rollno"=>1234517,"course"=>"B.Tech ECE","result"=>"B","cgpa"=>8.0],
    ["name"=>"Sneha","rollno"=>1234518,"course"=>"B.Tech ME","result"=>"A+","cgpa"=>9.6],
    ["name"=>"Rohit","rollno"=>1234519,"course"=>"B.Tech CSE","result"=>"A","cgpa"=>9.1],
    ["name"=>"Kavya","rollno"=>1234520,"course"=>"B.Tech ECE","result"=>"B+","cgpa"=>8.4],
    ["name"=>"Aditya","rollno"=>1234521,"course"=>"B.Tech ME","result"=>"A-","cgpa"=>8.7],
    ["name"=>"Sanya","rollno"=>1234522,"course"=>"B.Tech CSE","result"=>"B","cgpa"=>8.2]
];


    return view('resultDashboard', compact('Student'));
    return view('resultDashboard', ['Student' => $Student]);
    return view('resultDashboard')->with('Student', $Student);
    // return view('resultDashboard')->withStudent($Student);
});



// call controller function in the route
Route::get('/greet',[BasicController::class,'greet']);
// route to return some UI from the controller function
Route::view('/signup','/signup'); //shortcut for opening the view
route::post('/submitform' ,function(){
    return "<script> alert('form submitted successfully') </script>";
});