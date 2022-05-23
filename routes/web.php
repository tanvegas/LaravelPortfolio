<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PaginationController;
use App\Http\Controllers\UploadController;

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

// Route::get('/session/get', [SessionController::class, 'getSessionData'])->name('session.get');
// Route::get('/session/set', [SessionController::class, 'storeSessionData'])->name('session.store');
// Route::get('/session/remove', [SessionController::class, 'deleteSessionData'])->name('session.delete');

// Route::get('/inner-join', [PostController::class, 'innerJoinClause'])->name('post.innerjoin');
// Route::get('/left-join', [PostController::class, 'leftJoinClause'])->name('post.leftjoin');
// Route::get('/right-join', [PostController::class, 'rightJoinClause'])->name('post.rightjoin');
// Route::get('/all-posts', [PostController::class, 'getAllPostsUsingModel'])->name('post.getallpostusingmodel');

Route::get('/test', function(){
    return view('test');
});

Route::get('/users', [PaginationController::class, 'allUsers']);
// Route::get('/users', [UserController::class, 'index'])->name('user.index');

Route::get('/upload', [UploadController::class, 'uploadForm']);
Route::post('/upload', [UploadController::class, 'uploadFile'])->name('upload.uploadfile');

// prefix for url soft
// namespace for controller
Auth::routes();

Route::resource('posts', PostController::class);
Route::group([
    'prefix' => 'posts', 
    ], function(){
        Route::put('/{id}', [PostController::class, 'update'])->name('posts.update');;
        Route::get('/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
});

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard-master');

Route::group([
    'middleware' => 'auth',
    'prefix' => 'dashboard',
    ], function(){
        Route::get('/profile', function(){
            return view('dashboard.profile');
        });
        
        Route::get('/experience', function(){
            return view('dashboard.experience');
        });
        
        Route::get('/skills-tools', function(){
            return view('dashboard.skills-tools');
        });
        
        Route::get('/contact', function(){
            return view('dashboard.contact');
        });

        Route::resource('posts', PostController::class);
});