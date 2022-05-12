<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    //
    public function index(){
        $experiences = array('PartTime - Mobile Developer', 'Mobile Developer / Web Developer', 'On the Job Training / Tokyo System Solutions');
        return view('welcome', compact('experiences'));
    }
}
