<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CupcakeController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('products',[CupcakeController::class, 'getProducts']);

Route::get('about', function () {
    return view('about');
});

Route::get('contacts',[ContactController::class, 'create']);
Route::post('contacts',[ContactController::class, 'store']);
/*
Route::get('contacts', function () {
    return view('contacts');
});*/

Route::post('search', function () {
    return view('search');
});