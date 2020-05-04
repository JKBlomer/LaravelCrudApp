<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
//     // return "Hello kate";
 //     // return "<h1>Hello kate</h1>";
// });


// Route::get("/hello", function(){
//     return "Helloooooooo kate!!!!!!!!!";
// });

// Route::get("/users/{id}", function($id){
//     return ("this is number: ".$id); 
            //here, the dot indicates concatenation (not similiar to dot notation in oop)
// });

Route::get("/about", function(){
    return view("pages.about");//this returns about.blade.php from inside the pages folder
});


Route::get("/", "PagesController@index");

Route::get("/about", "PagesController@about");

Route::get("/services", "PagesController@services");

Route::resource("posts","PostsController");
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
