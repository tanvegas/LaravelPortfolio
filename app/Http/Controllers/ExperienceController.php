<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExperienceController extends Controller
{
    //
    // public function index(){
    //     $experiences = array('PartTime - Mobile Developer', 'Mobile Developer / Web Developer', 'On the Job Training / Tokyo System Solutions');
    //     return view('experience', compact('experiences'));
    // }
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $experiences = DB::table('experiences')->get();
        return view('dashboard.experience', compact('experiences'));
    }

    public function create()
    {
        return view('dashboard.experience.create');
    }

    public function store(Request $request)
    {
        DB::table('experiences')->insert([
            'date' => $request->date,
            'position' => $request->position,
            'address' => $request->address,
            'desc' => $request->desc
        ]);
        return back()->with('post_created', 'Post has been create succesfully!');
    }

    public function show($id)
    {
        $experience = DB::table('experiences')->where('id', $id)->first();
        return view('dashboard.experience.show', compact('experience'));
    }

    public function edit($id)
    {
        $experience = DB::table('experiences')->where('id', $id)->first();
        return view('dashboard.experience.edit', compact('experience'));
    }

    // , $id
    public function update(Request $request)
    {
        DB::table('experiences')->where('id', $request->id)->update([
            'title' => $request->title,
            'body' => $request->body
        ]);
        return back()->with('post_updated', 'Post has benn update successfully!');
    }

    public function destroy($id)
    {
        DB::table('experiences')->where('id', $id)->delete();
        return back()->with('post_deleted', 'Post has been delete successfully!');
    }
}
