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
use Illuminate\Support\Facades\DB;

Route::get('/test-db', function () {
    try {
        DB::connection()->getPdo();
        return "Database telah terhubung dengan sukses.";
    } catch (\Exception $e) {
        return "Gagal untuk melakukan koneksi ke database: " . $e->getMessage();
    }
});

Route::get('/', function () {
    return view('welcome');
});
