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
use App\Http\Controllers\RegisterController;

Route::post('/submit', [RegisterController::class, 'submit']);
Route::view('/register', 'register');

Route::get('/', function () {
    return view('welcome');
});
