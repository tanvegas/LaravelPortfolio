<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    //
    // public function index(){
    //     $experiences = array('PartTime - Mobile Developer', 'Mobile Developer / Web Developer', 'On the Job Training / Tokyo System Solutions');
    //     return view('experience', compact('experiences'));
    // }
    public function index(){
        return 'Test for Experience Page';
    }

    public function index1($name){
        return 'Test for Experience Page with name: ' . $name;
    }
}
