<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return redirect('/post');
});

Route::resource('post', PostController::class);

Route::get('/about', function () {
    return view('about.index');
});

Route::middleware(['guest'])->group(function () {
    Route::resource('register', RegisterController::class)->only(['index', 'store']);
    Route::resource('login', LoginController::class)->only(['index', 'store']);
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [LogoutController::class, 'destroy']);
});
