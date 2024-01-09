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

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cache;

Route::get('/set-session', function () {
    Session::put('key', 'mysession123');
    return "Session set!";
});

Route::get('/get-session', function () {
    return Session::get('key', 'Default');
});

Route::get('/set-cache', function () {
    Cache::put('cacheKey', 'mycache123Value', 600); // 10 minutes
    return "Cache set!";
});

Route::get('/get-cache', function () {
    return Cache::get('cacheKey', 'Default');
});

Route::get('/', function () {
    return view('welcome');
});
