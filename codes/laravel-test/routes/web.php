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

use App\Http\Controllers\CalculatorController;

Route::get('/add/{a}/{b}', [CalculatorController::class, 'add']);
Route::get('/subtract/{a}/{b}', [CalculatorController::class, 'subtract']);

Route::get('/', function () {
    return view('welcome');
});
