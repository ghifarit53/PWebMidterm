<?php

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

Route::get('/', function() {
  return view('home', [
    'title' => 'Home',
    'posts' => Post::all(),
  ]);
});

Route::get('/newpost', function() {
  return view('newpost', [
    'title' => 'New Post',
  ]);
});

Route::get('/post/{slug}', function($slug) {
  $post = Post::find($slug);
  return view('post', [
    'title' => $post['text'],
    'post' => $post,
  ]);
});

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
    return view('signuppage', [
        'title' => 'signup',

    ]);

});


Route::get('/login', function() {
    return view('loginpage', [
        'title' => 'login',

    ]);

});
