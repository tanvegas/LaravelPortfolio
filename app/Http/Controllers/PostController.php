<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
// use Illuminate\Routing\Controller;
// use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $posts = DB::table('posts')->get();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        DB::table('posts')->insert([
            'title' => $request->title,
            'body' => $request->body
        ]);
        return back()->with('post_created', 'Post has been create succesfully!');
    }

    public function show($id)
    {
        $post = DB::table('posts')->where('id', $id)->first();
        return view('posts.show', compact('post'));
    }

    public function edit($id)
    {
        $post = DB::table('posts')->where('id', $id)->first();
        return view('posts.edit', compact('post'));
    }

    // , $id
    public function update(Request $request)
    {
        DB::table('posts')->where('id', $request->id)->update([
            'title' => $request->title,
            'body' => $request->body
        ]);
        return back()->with('post_updated', 'Post has benn update successfully!');
    }

    public function destroy($id)
    {
        DB::table('posts')->where('id', $id)->delete();
        return back()->with('post_deleted', 'Post has been delete successfully!');
    }
 
    // public function innerJoinClause(){
    //     $request = DB::table('users')
    //         ->join('posts','users.id','=','posts.user_id')
    //         ->select('users.name', 'posts.title', 'posts.body')
    //         ->get();
    //         return $request;
    // }
    
    // public function leftJoinClause(){
    //     $result = DB::table('users')
    //         ->leftJoin('posts','users.id','=','posts.user_id')
    //         ->get();
    //         return $result;
    // }

    // public function rightJoinClause(){
    //     $result = DB::table('users')
    //         ->rightJoin('posts', 'posts.user_id', '=', 'users.id')
    //         ->get();
    //         return $result;
    // }

    // public function getAllPostsUsingModel(){
    //     $posts = Post::all();
    //     return $posts;
    // }
}
