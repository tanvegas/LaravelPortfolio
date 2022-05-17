<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PaginationController extends Controller
{
    //
    public function allUsers(){
        $users = User::paginate(5);
        return view('users', compact('users'));
    }
}
