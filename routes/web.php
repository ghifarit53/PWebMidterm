<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SignupController;

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
Route::get('/post/{post:slug}', [PostController::class, 'show']);
Route::get('/profile/{user:username}', [ProfileController::class, 'index']);

Route::get('/signup', [SignupController::class, 'index']);
Route::post('/signup', [SignupController::class, 'store']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/newpost', function() {
  return view('newpost', [
    'title' => 'New Post',
  ]);
});

// Route::get('/changeprofile', function() {
//     return view('changeprofile', [
//         'title' => 'Profile',
//         'username' => '@ghifarit53',
//         'name' => 'Muhammad Ghifari Taqiuddin',
//         'age' => 19,
//         'email' => 'mghifarit53@gmail.com',
//     ]);
// });