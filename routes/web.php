<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Models\Genre;

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
    return view('home', [
        "title" => "Home",
        "genres" => Genre::orderBy('name', 'asc')->get(),
        "listgenre" => Genre::orderBy('name', 'asc')->get()
    ]);
});

Route::get('/animelist', [PostController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/about', function () {
    return view('about', [
        'title' => 'About',


    ]);
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::get('/{post:slug}', [PostController::class, 'show']);
Route::get('/dashboard/post/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
// Route::get('/genre/{genre:slug}', [PostController::class, 'genre']);


// // Route::get('/authors/{author:username}', function (User $author) {
// //     return view('animelist', [
// //         'title' => "POst by author : $author->name",
// //         'posts' => $author->posts->load('genre', 'author')

// //     ]);
// // });
