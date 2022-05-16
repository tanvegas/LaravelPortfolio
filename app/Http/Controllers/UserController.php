<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function index(){
    //     $name = 'Tristan';
    //     $users = array(
    //         "name" => "Tristan Vegas",
    //         "email" => "tristan.vegas.sdw@gmail.com",
    //         "phone" => "639212089062"
    //     );
    //     return view('login', compact('name', 'users'));
    // }

    public function index(Request $request){
        //return what method
        // return $request->method();
        //return what path (/login)
        // return $request->path();
        //return what url (http://127.0.0.1:8000/login)
        // return $request->url();
        //return what fullurl (http://127.0.0.1:8000/login?name=tristan&age=27)
        return $request->fullUrl();
    }
}
