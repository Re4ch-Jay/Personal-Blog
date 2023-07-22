<?php

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
    return view('posts.index');
});

Route::get('/post/{id}', function () {
    return view('posts.show');
});

Route::get('/register', [RegisterController::class, 'index'])->middleware(['guest']);
Route::post('/register', [RegisterController::class, 'store'])->middleware(['guest']);

Route::get('/login', function () {
    return view('auth.login');
});
