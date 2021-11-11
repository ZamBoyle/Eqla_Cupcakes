<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CupcakeController;

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

Route::view('/', 'home');
Route::get('products',[CupcakeController::class, 'index']);
Route::get('products/{id}',[CupcakeController::class, 'show']);

Route::view('about', 'about');

Route::view('contacts','contacts');

Route::post('search', [CupcakeController::class,'search']);