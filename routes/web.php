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


Route::get('/about', function () {
    return view('about.index');
});

Route::middleware(['guest'])->group(function () {
    Route::resource('register', RegisterController::class)->only(['index', 'store']);
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [LogoutController::class, 'destroy']);
});

Route::middleware(['admin'])->group(function () {
    Route::resource('post', PostController::class)->only(['create', 'edit', 'destroy', 'store', 'update']);
});

Route::resource('post', PostController::class)->only(['index', 'show']);
