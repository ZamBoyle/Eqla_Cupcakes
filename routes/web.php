<?php

use App\Http\Controllers\AdminController;
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

Route::get('/', [CupcakeController::class, 'home']);
Route::get('products', [CupcakeController::class, 'index']);
Route::get('products/{id}', [CupcakeController::class, 'show']);

Route::view('about', 'about');

Route::get('contacts', [ContactController::class, 'create']);
Route::post('contacts', [ContactController::class, 'store']);

Route::post('search', [CupcakeController::class, 'search']);
Route::get('initialize', [AdminController::class, 'initialize']);
