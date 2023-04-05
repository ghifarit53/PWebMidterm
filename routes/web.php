<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PostController::class, 'index']);

Route::get('/newpost', function() {
  return view('newpost', [
    'title' => 'New Post',
  ]);
});

Route::get('/post/{post:slug}', [PostController::class, 'show']);

Route::get('/profile', function() {
  return view('profile', [
      'author' => 'shintaeyong',
      'title' => 'Profile',
      'posts' => Post::all(),
  ]);
});


Route::get('/profile/change', function() {
    return view('profilechange', [
        'title' => 'Profile',
        'username' => '@ghifarit53',
        'name' => 'Muhammad Ghifari Taqiuddin',
        'age' => 19,
        'email' => 'mghifarit53@gmail.com',
    ]);
});

Route::get('/signup', function() {
    return view('signup', [
        'title' => 'signup',

    ]);
});


Route::get('/login', function() {
    return view('login', [
        'title' => 'login',

    ]);
});

Route::get('/user/{slug}', function($slug) {
  return view('user', [
    'title' => 'Profile | ' . $slug,
    'user' => $slug,
  ]);
});
