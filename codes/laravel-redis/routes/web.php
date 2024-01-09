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

// Rute untuk menyimpan data sesi
Route::get('/store-session/{data}', function ($data, Request $request) {
    // Menyimpan data ke sesi
    $request->session()->put('key', $data);
    return "Data telah disimpan kedalam session!";
});

// Rute untuk mengambil data sesi
Route::get('/get-session', function (Request $request) {
    // Mengambil data dari sesi
    $data = $request->session()->get('key', 'Default');
    return "Data dari session: " . $data;
});

Route::get('/', function () {
    return view('welcome');
});
