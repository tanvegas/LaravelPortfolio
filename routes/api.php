<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', function(){
    return 'hi users';
});

Route::get('/users/{name?}', function($name = null){
    return 'hi ' . $name;
})->where('name','[A-Za-z]+');

//if the site show error if their is no name add ? to the variable or the /users will show
// Route::get('/users/{name?}', function($name?){
//     return "hi " . $name;
// });

//to add validation in the variable add in the of the Route
// ->where('sampleVariable','[A-Za-z]+');
// ->where('sampleVariable','[0-9]+');
//or you can set router provider in app/providers/routeserviceprovider.php
//and set on boot function the provider router fofr validation
// Router::pattern('sampleVariable', '[a-zA-Z]+');
// Router::pattern('sampleVariable', '[0-9]+');

Route::get('/products/{id?}', function($id = null){
    return 'Product ID is: ' . $id;
});

Route::match(['get','post'], '/students', function(Request $req){
    return 'Requested method is ' . $req->method();
});
 
Route::any('/posts', function(Request $req){
    return 'Requested method is ' . $req->method();
});