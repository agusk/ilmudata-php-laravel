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
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

Route::get('/user/{id}', [UserController::class, 'show']);
// menggunakan middleware
Route::get('/umur/{age}', [UserController::class, 'display'])->middleware('checkage');

Route::get('/posts', [PostController::class, 'index']);

Route::get('/', function () {
    //return view('welcome');
    return 'Selamat datang di Laravel Dasar!';
});
Route::get('/user/{name}', function ($name) {
    return 'Hai ' . $name;
});

Route::get('/home', function () {
    return view('welcome');
})->name('home');


Route::get('/salam', function () {
    // Coba ambil nama dari session atau cookie
    $name = session('name', request()->cookie('name', 'Guest'));
    return view('salam', compact('name'));
});

Route::post('/submit-name', function (Request $request) {
    $name = $request->input('name');
    // Simpan nama ke session dan cookie
    session(['name' => $name]);
    return redirect('/salam')->withCookie(cookie('name', $name, 60));
});
