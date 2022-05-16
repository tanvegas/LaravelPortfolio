<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', [ExperienceController::class, 'index'])->name('experience.index');

Route::get('/contact', function(){
    return view('welcome');
});

// Route::get('/login', function(){
//     return view('login');
// });

Route::get('/login', [LoginController::class, 'index'])->name('login.index')->middleware('checkuser');
Route::post('/login', [LoginController::class, 'loginSubmit'])->name('login.submit');

Route::get('/users', [UserController::class, 'index'])->name('user.index');

Route::get('/experience', [ExperienceController::class, 'index'])->name('experience.index');
Route::get('/experience/{name}', [ExperienceController::class, 'index1'])->name('experience.index1');

Route::get('/posts', [ClientController::class, 'getAllPost'])->name('posts.getallpost');
Route::get('/posts/{id}', [ClientController::class, 'getPostById'])->name('posts.getpostbyid');
Route::get('/add-post', [ClientController::class, 'addPost'])->name('posts.addpost');
Route::get('/update-post', [ClientController::class, 'updatePost'])->name('posts.updatepost');
Route::get('/delete-post/{id}', [ClientController::class, 'deletePost'])->name('posts.deletepost');