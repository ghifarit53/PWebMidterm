<?php

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
  $posts = [
    [
      "text" => "Rek info menu buka di manarul hari ini dong",
      "date" => "Sun, 2 Apr",
      "time" => "13.45",
      "author" => "shintaeyong",
      "image" => Null
    ],
    [
      "text" => "Semangat ETS ayang 5005******",
      "date" => "Sun, 2 Apr",
      "time" => "10.44",
      "author" => "flappybird",
      "image" => Null,
    ],
    [
      "text" => "Rek gerbang asrama buka ga ya sekarang??",
      "date" => "Sun, 2 Apr",
      "time" => "08.45",
      "author" => "__xxoyou33",
      "image" => Null,
    ],
    [
      "text" => "WTS tiket Suzume di xxi sore ini bgt, sender pulkam soalnya",
      "date" => "Sun, 2 Apr",
      "time" => "06.45",
      "author" => "weebu1945",
      "image" => Null,
    ],
  ];

  return view('home', [
    'title' => 'Home',
    'posts' => $posts,
  ]);
});


Route::get('/post', function() {
  return view('post', [
    'title' => 'Post',
  ]);
});

Route::get('/profile', function() {
  return view('profile', [
    'title' => 'Profile',
    'username' => '@ghifarit53',
    'name' => 'Muhammad Ghifari Taqiuddin',
    'age' => 19,
    'email' => 'mghifarit53@gmail.com',
 ]);
});
